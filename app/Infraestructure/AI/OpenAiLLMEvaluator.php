<?php

namespace App\Infraestructure\AI;

use App\Domain\AI\LLMEvaluator;
use App\Domain\Entities\Listing;
use App\Domain\ValueObjects\ListingEnrichment;
use App\Infraestructure\Persistence\EloquentCategoryRepository;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAiLLMEvaluator implements LLMEvaluator
{
    public function __construct(
        private EloquentCategoryRepository $categoryRepository
    )
    {
    }

    public function evaluateListing(Listing $listing): ListingEnrichment
    {
        $category = $this->categoryRepository->findById($listing->categoryId);
        logger("Category Name : {$category->name}");
        $prompt = <<<EOF
        Evaluate the following sports equipment listing:

        - Title: {$listing->title}
        - Condition: {$listing->condition->value}
        - Description: {$listing->description}
        - Listed Price: \${$listing->price}
        - Category : {$category->name}

        Provide a market analysis for this item.
        EOF;

        $systemInstructions = <<<EOF
        You are a sports equipment market analyst. Your task is to enrich user-created listings by providing expert evaluation and pricing analysis.

        Analyze the listing and return a JSON object with:

        1. "evaluation_text": A comprehensive equipment evaluation (3-4 sentences) that includes:
           - Model/equipment quality assessment based on brand, technology, and features
           - Performance characteristics and target use case
           - Notable strengths or considerations for buyers
           - Overall value proposition of this specific model

        2. "estimated_price": Current market value (number) calculated based on:
           - The declared item condition (new, used, refurbished, etc.)
           - Comparable sales for similar equipment in the same condition
           - Brand reputation and model specifications
           - Market demand and availability
           - Depreciation factors based on condition

           IMPORTANT: The estimated price MUST reflect the actual condition provided. A "used" item should be valued significantly lower than "new".

        3. "recommended_skill_level": Target user expertise (must be one of):
           - "beginner": Entry-level equipment suitable for those learning basics
           - "intermediate": Mid-range equipment for developing skills
           - "professional": High-performance equipment for advanced/competitive users

        Focus primarily on model evaluation and condition-based pricing as per requirements. Return ONLY valid JSON with these exact field names.
        EOF;

        $response = OpenAI::responses()->create([
            'model' => 'gpt-5-nano-2025-08-07',
            'input' => [
                ['role' => 'system', 'content' => 'Return ONLY valid JSON. No markdown'],
                ['role' => 'system', 'content' => $systemInstructions],
                ['role' => 'user', 'content' => $prompt],
            ],
            'text' => [
                'format' => ['type' => 'json_object'],
            ],
        ]);

        $result = json_decode($response->outputText, true, flags: JSON_THROW_ON_ERROR);
        logger('Debugging IA Message : \n'. json_encode($result, JSON_PRETTY_PRINT));
        return new ListingEnrichment(
            estimated_price: $result['estimated_price'],
            evaluation_text: $result['evaluation_text'],
            recommended_skill_level: $result['recommended_skill_level']
        );
    }
}

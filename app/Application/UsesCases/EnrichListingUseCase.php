<?php

namespace App\Application\UsesCases;

use App\Domain\AI\LLMEvaluator;
use App\Domain\Entities\Listing;
use App\Domain\Repositories\ListingRepositoryInterface;

class EnrichListingUseCase
{
    public function __construct(
        private LLMEvaluator $evaluator,
        private ListingRepositoryInterface $repository
    )
    {
    }

    public function execute(int $id) : Listing
    {
        $listing = $this->repository->findById($id);
        $listedEnrichment = $this->evaluator->evaluateListing($listing);

        /* Create new Listing with the AI evaluation and save-update it */
        return $this->repository->save(new Listing(
            id: $listing->id,
            userId: $listing->userId,
            categoryId: $listing->categoryId,
            title: $listing->title,
            price: $listing->price,
            condition: $listing->condition,
            description: $listing->description,
            endDate: $listing->endDate,
            ai_estimated_price: $listedEnrichment->estimated_price,
            ai_evaluation_text: $listedEnrichment->evaluation_text,
            ai_recommended_skill_level: $listedEnrichment->recommended_skill_level
        ));

    }
}

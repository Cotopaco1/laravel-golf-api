<?php

namespace App\Domain\Entities;

use App\Domain\Enums\ListingCondition;
use DateTime;
use DateTimeImmutable;

class Listing
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly int $userId,
        public readonly ?int $categoryId = null,
        public readonly string $title,
        public readonly float $price,
        public readonly ListingCondition $condition,
        public readonly ?string $description = null,
        public readonly DateTime $endDate,
        public readonly ?string $ai_estimated_price = null,
        public readonly ?string $ai_evaluation_text = null,
        public readonly ?string $ai_recommended_skill_level = null,
        public readonly ?DateTimeImmutable $createdAt = null,
        public readonly ?DateTimeImmutable $updatedAt = null,
        public readonly ?DateTimeImmutable $deletedAt = null,
        public readonly ?Category $category = null,
        public readonly ?User $user = null,
    ) {
        $this->validatePrice();
    }
    private function validatePrice() : void
    {
        if($this->price <= 0){
            throw new \DomainException('Price must be greater than 0');
        }
    }

}

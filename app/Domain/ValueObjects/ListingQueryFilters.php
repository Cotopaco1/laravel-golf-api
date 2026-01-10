<?php

namespace App\Domain\ValueObjects;

use App\Domain\Enums\ListingCondition;

class ListingQueryFilters
{
    public function __construct(
        public ?string $priceFrom = null,
        public ?string $priceTo = null,
        public ?string $categoryId = null,
        public ?ListingCondition $condition = null,
        public ?array $keywords = null,
        public ?bool $showAll = null,
    )
    {
    }
}

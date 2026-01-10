<?php

namespace App\Application\UsesCases;

use App\Domain\Enums\ListingCondition;
use App\Domain\Repositories\ListingRepositoryInterface;
use App\Domain\ValueObjects\ListingQueryFilters;
use App\Domain\ValueObjects\PaginationResult;

class PaginateListingsUseCase
{
    public function __construct(
        private ListingRepositoryInterface $repository
    )
    {
    }

    public function execute(int $page, array $filters = []): PaginationResult
    {
        $filters = new ListingQueryFilters(
            priceFrom: $filters['price_from'] ?? null,
            priceTo: $filters['price_to'] ?? null,
            categoryId: $filters['category_id'] ?? null,
            condition: ListingCondition::tryFrom($filters['condition'] ?? null),
            keywords: $filters['keywords'] ?? null,
            showAll: $filters['show_all'] ?? null
        );
        return $this->repository->paginate(page: $page, filters: $filters);
    }
}

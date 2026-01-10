<?php

namespace App\Domain\ValueObjects;

readonly class PaginationResult
{
    public function __construct(
        public array $items,
        public int $total,
        public int $perPage,
        public int $currentPage
    ) {}
}

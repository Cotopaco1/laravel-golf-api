<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Listing;
use App\Domain\ValueObjects\ListingQueryFilters;
use App\Domain\ValueObjects\PaginationResult;

interface ListingRepositoryInterface
{
    /**
     * Save listing in the Database
     * */
    public function save(Listing $listing):Listing;
    public function create(Listing $listing):Listing;

    public function findById(int|string $id):Listing;
    public function paginate(int $page = 1, int $perPage = 15, ?ListingQueryFilters $filters = null): PaginationResult;
    public function delete(int|string $id):bool;
}

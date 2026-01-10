<?php

namespace App\Application\UsesCases;

use App\Domain\Repositories\ListingRepositoryInterface;

class DeleteListingUseCase
{
    public function __construct(
        private ListingRepositoryInterface $repository
    )
    {
    }

    public function execute(int|string $id): bool
    {
        return $this->repository->delete($id);
    }
}

<?php

namespace App\Application\UsesCases;

use App\Domain\Entities\Listing;
use App\Domain\Enums\ListingCondition;
use App\Domain\Repositories\ListingRepositoryInterface;
use App\Infraestructure\Queue\Jobs\EnrichListingJob;

class CreateListingUseCase
{

    public function __construct(
        private ListingRepositoryInterface $repository
    )
    {
    }

    public function execute(array $data) : Listing
    {
        $listing = new Listing(
            id : null,
            userId: $data['user_id'],
            categoryId: $data['category_id'],
            title: $data['title'],
            price: $data['price'],
            condition: ListingCondition::from($data['condition']),
            description: $data['description'] ?? null,
            endDate: new \DateTime($data['end_date'])
        );

        $listing = $this->repository->create($listing);

        /* Dispatch sync for testing purpose. */
//        dispatch_sync(new EnrichListingJob($listing->id));
        dispatch(new EnrichListingJob($listing->id));

        return $listing;
    }
}

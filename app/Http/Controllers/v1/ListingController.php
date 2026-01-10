<?php

namespace App\Http\Controllers\v1;

use App\Application\UsesCases\CreateListingUseCase;
use App\Application\UsesCases\DeleteListingUseCase;
use App\Application\UsesCases\PaginateListingsUseCase;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\DestroyListingRequest;
use App\Http\Requests\v1\IndexListingRequest;
use App\Http\Requests\v1\StoreListingRequest;
use App\Http\Resources\v1\ListingResource;
use App\Http\Responses\ApiResponse;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct(
        private CreateListingUseCase $createListingUseCase,
        private PaginateListingsUseCase $paginateListingsUseCase,
        private DeleteListingUseCase $deleteListingUseCase
    )
    {
    }

    public function index(IndexListingRequest $request)
    {
        $validated = $request->validated();
        $pagination = $this->paginateListingsUseCase->execute($request->input('page') ?? 1, $validated);

        return ApiResponse::paginated(
            ListingResource::collection($pagination->items)->resolve(),
            $pagination->total,
            $pagination->perPage,
            $pagination->currentPage
        );
    }

    public function store(StoreListingRequest $request)
    {
       $listing = $this->createListingUseCase->execute([
           ...$request->validated(),
           ...['user_id' => $request->user()->id]
       ]);

       return ApiResponse::success(
           new ListingResource($listing),
           'Listing Created',
           201
       );
    }

    public function destroy(DestroyListingRequest $request, Listing $listing)
    {
        $this->deleteListingUseCase->execute($listing->id);

        return ApiResponse::success([
            'id' => $listing->id
        ], 'Deleted success');
    }
}

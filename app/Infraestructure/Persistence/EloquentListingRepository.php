<?php

namespace App\Infraestructure\Persistence;

use App\Domain\Repositories\ListingRepositoryInterface;
use App\Domain\ValueObjects\ListingQueryFilters;
use App\Domain\ValueObjects\PaginationResult;
use App\Infraestructure\Mappers\ListingMapper;
use App\Models\Listing as ListingModel;
use \App\Domain\Entities\Listing;

class EloquentListingRepository implements ListingRepositoryInterface
{

    public function save(Listing $listing): Listing
    {
        ListingModel::query()
            ->where('id', $listing->id)
            ->update([
                'title' => $listing->title,
                'price' => $listing->price,
                'condition' => $listing->condition->value,
                'description' => $listing->description,
                'end_date' => $listing->endDate,
                'ai_estimated_price' => $listing->ai_estimated_price,
                'ai_evaluation_text' => $listing->ai_evaluation_text,
                'ai_recommended_skill_level' => $listing->ai_recommended_skill_level
            ]);

        return $listing;

    }

    public function create(Listing $listing): Listing
    {
        $model = ListingModel::query()->create(ListingMapper::toArray($listing));
        return ListingMapper::toEntity($model);
    }

    public function findById($id): Listing
    {
       $model = ListingModel::query()->findOrFail($id);
       return ListingMapper::toEntity($model);
    }

    public function paginate(int $page = 1, int $perPage = 15, ?ListingQueryFilters $filters = null): PaginationResult
    {
        logger('Filters in Paginate : ', ['filters' => $filters]);
        $paginate = ListingModel::query()
            ->when($filters->categoryId, function($query, $categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->when($filters->priceFrom, function($query, $from){
                $query->where('price', '>=', $from);
            })
            ->when($filters->priceTo, fn($query, $to) => $query->where('price', '<=', $to))
            ->when($filters->condition, fn($query, $condition)=> $query->where('condition', $condition->value))
            ->when($filters->keywords, function($query, $keywords){
                /*Map array*/
                foreach ($keywords as $keyword){
                    $query->orWhere('title', 'like', "%$keyword%");
                    $query->orWhere('description', 'like', "%$keyword%");
                }

            })
            ->when(!$filters->showAll, function($query){
                $query->where('end_date', '<=', now()->toDateTime());
                $query->orderBy('created_at', 'asc');
            })
            ->when($filters->showAll, function($query){
                $query->orderBy('price', 'desc');
            })
            ->with(['user','category'])
            ->paginate($perPage); // It get the page param from the request.

        return new PaginationResult(
            items: array_map(
                fn($model) => ListingMapper::toEntity($model),
                $paginate->items()
            ),
            total: $paginate->total(),
            perPage: $paginate->perPage(),
            currentPage: $paginate->currentPage()
        );

    }

    public function delete(string|int $id): bool
    {
        return ListingModel::query()->whereKey($id)->delete();
    }
}

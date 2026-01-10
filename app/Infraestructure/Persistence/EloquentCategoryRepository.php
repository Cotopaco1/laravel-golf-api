<?php

namespace App\Infraestructure\Persistence;
use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Models\Category as CategoryModel;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    public function findById(int|string $id): Category
    {
        $model = CategoryModel::query()->findOrFail($id);
        return new Category(
            id : $model->id,
            name: $model->name
        );
    }
}

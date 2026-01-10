<?php

namespace App\Infraestructure\Mappers;

use App\Domain\Entities\Category;
use App\Models\Category as CategoryModel;

class CategoryMapper
{
    public static function toEntity(CategoryModel $model): Category
    {
        return new Category(
            id: $model->id,
            name: $model->name
        );
    }

    public static function toArray(Category $category): array
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
        ];
    }
}

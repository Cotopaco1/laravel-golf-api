<?php

namespace App\Infraestructure\Mappers;

use App\Domain\Entities\Category;
use App\Domain\Entities\Listing as ListingEntity;
use App\Domain\Entities\User;
use App\Models\Listing as ListingModel;
use DateTimeImmutable;

class ListingMapper
{
    public static function toEntity(ListingModel $model): ListingEntity
    {

        return new ListingEntity(
            id: $model->id,
            userId: $model->user_id,
            categoryId: $model->category_id,
            title: $model->title,
            price: $model->price,
            condition: $model->condition,
            description: $model->description,
            endDate: $model->end_date,
            ai_estimated_price: $model->ai_estimated_price,
            ai_evaluation_text: $model->ai_evaluation_text,
            ai_recommended_skill_level: $model->ai_recommended_skill_level,
            createdAt: $model->created_at ? DateTimeImmutable::createFromMutable($model->created_at) : null,
            updatedAt: $model->updated_at ? DateTimeImmutable::createFromMutable($model->updated_at) : null,
            deletedAt: $model->deleted_at ? DateTimeImmutable::createFromMutable($model->deleted_at) : null,
            category: $model->category ? CategoryMapper::toEntity($model->category) : null,
            user: $model->user ? UserMapper::toEntity($model->user) : null,
        );
    }

    public static function toArray(ListingEntity $entity): array
    {
        return [
            'id' => $entity->id,
            'user_id' => $entity->userId,
            'category_id' => $entity->categoryId,
            'title' => $entity->title,
            'price' => $entity->price,
            'condition' => $entity->condition->value,
            'description' => $entity->description,
            'end_date' => $entity->endDate->format('Y-m-d H:i:s'),
            'ai_estimated_price' => $entity->ai_estimated_price,
            'ai_evaluation_text' => $entity->ai_evaluation_text,
            'ai_recommended_skill_level' => $entity->ai_recommended_skill_level,
            'user' => $entity->user ? UserMapper::toArray($entity->user) : null,
            'category' => $entity->category ? UserMapper::toArray($entity->user) : null,
        ];
    }
}

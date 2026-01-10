<?php

namespace App\Infraestructure\Mappers;

use App\Domain\Entities\User as UserEntity;
use App\Models\User as UserModel;

class UserMapper
{
    public static function toEntity(UserModel $model): UserEntity
    {
        return new UserEntity(
            firstName: $model->first_name,
            lastName: $model->last_name,
            email: $model->email,
            password: $model->password,
        );
    }

    public static function toArray(UserEntity $entity): array
    {
        return [
            'first_name' => $entity->firstName,
            'last_name' => $entity->lastName,
            'email' => $entity->email,
//            'password' => $entity->password,
        ];
    }
}

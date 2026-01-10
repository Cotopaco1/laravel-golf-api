<?php

namespace App\Domain\Entities;

class Category
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly string $name
    )
    {
    }
}

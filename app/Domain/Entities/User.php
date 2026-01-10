<?php

namespace App\Domain\Entities;

class User
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $email,
        private readonly string $password,
    )
    {
    }
}

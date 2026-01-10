<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Sergio',
            'last_name' => 'Silva',
            'email' => 'sergio@test.com',
            'password' => 'password123'
        ]);

        $this->call([
            CategorySeeder::class,
            ListingSeeder::class
        ]);

    }
}

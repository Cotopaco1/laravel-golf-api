<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Drivers',
            'Woods',
            'Hybrids',
            'Driving',
            'Irons',
            'Wedges',
            'Putters'
        ];
        foreach ($data as $category){
            Category::query()->create(['name'=> $category]);
        }
    }
}

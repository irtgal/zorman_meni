<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;

class CategoryItemSeeder extends Seeder
{
    public function run()
    {
        $categories = ['Malica 1', 'Malica 2', 'Malica 3', 'Malica 4', 'Malica 5', 'Malica 6', 'Dodatno'];

        $categories = [
            ['name' => 'Malica 1', 'price' => 6.5],
            ['name' => 'Malica 2', 'price' => 7],
            ['name' => 'Malica 3', 'price' => 7.5],
            ['name' => 'Malica 4', 'price' => 8],
            ['name' => 'Malica 5', 'price' => 8.5],
            ['name' => 'Juhe', 'price' => 1.6],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}


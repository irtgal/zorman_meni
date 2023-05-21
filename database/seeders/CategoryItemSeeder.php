<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;

class CategoryItemSeeder extends Seeder
{
    public function run()
    {
        $categories = ['Malica 1', 'Malica 2', 'Malica 3', 'Malica 4', 'Malica 5', 'Stalna Ponudba'];
        $price = 5.00;
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'price' => $price,
            ]);
            $price = round($price * 1.15, 2);
        }

        $items = [
            'Dish 1', 'Dish 2', 'Dish 3', 'Dish 4', 'Dish 5', 'Dish 6', 'Dish 7', 'Dish 8', 'Dish 9', 'Dish 10',
            'Dish 11', 'Dish 12', 'Dish 13', 'Dish 14', 'Dish 15', 'Dish 16', 'Dish 17', 'Dish 18', 'Dish 19', 'Dish 20',
        ];

        $categoriesCount = count($categories);
        $itemsCount = count($items);

        $itemsPerCategory = ceil($itemsCount / $categoriesCount);

        $index = 0;

        foreach ($categories as $category) {
            for ($i = 0; $i < $itemsPerCategory; $i++) {
                if ($index >= $itemsCount) {
                    break;
                }

                Item::create([
                    'name' => $items[$index],
                    'description' => 'Description for ' . $items[$index],
                    'active' => true,
                    'category_id' => Category::where('name', $category)->first()->id,
                ]);

                $index++;
            }
        }
    }
}


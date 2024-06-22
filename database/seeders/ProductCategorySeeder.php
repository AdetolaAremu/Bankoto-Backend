<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $categories = [
            ['name' => 'Electronics', 'created_at' => $now,'updated_at'=> $now],
            ['name' => 'Fashion', 'created_at' => $now,'updated_at'=> $now],
            ['name' => 'Home & Kitchen', 'created_at'=> $now,'updated_at'=> $now],
        ];

        Category::insert($categories);
    }
}

<?php

namespace Database\Seeders;

use App\Models\MediaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaCategorySeeder extends Seeder
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

        MediaCategory::insert($categories);
    }
}

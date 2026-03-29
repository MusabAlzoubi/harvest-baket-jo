<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Vegetables', 'slug' => 'vegetables'],
            ['name' => 'Fruits', 'slug' => 'fruits'],
            ['name' => 'Leafy Greens', 'slug' => 'leafy-greens'],
            ['name' => 'Offers', 'slug' => 'offers'],
        ];

        foreach ($categories as $item) {
            DB::table('categories')->updateOrInsert(
                ['slug' => $item['slug']],
                [
                    'name' => $item['name'],
                    'description' => null,
                    'is_active' => true,
                    'sort_order' => 0,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}

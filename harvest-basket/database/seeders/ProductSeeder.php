<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $fruitsId = DB::table('categories')->where('slug', 'fruits')->value('id');
        $vegetablesId = DB::table('categories')->where('slug', 'vegetables')->value('id');

        $products = [
            [
                'category_id' => $fruitsId,
                'name' => 'Fresh Apple',
                'slug' => 'fresh-apple',
                'sku' => 'HB-APL-001',
                'description' => 'Fresh and crispy apples.',
                'price' => 2.50,
                'sale_price' => null,
                'stock' => 100,
                'image' => 'img/fruite-item-1.jpg',
                'is_active' => true,
            ],
            [
                'category_id' => $fruitsId,
                'name' => 'Orange',
                'slug' => 'orange',
                'sku' => 'HB-ORG-001',
                'description' => 'Juicy oranges full of vitamin C.',
                'price' => 3.00,
                'sale_price' => 2.70,
                'stock' => 120,
                'image' => 'img/fruite-item-2.jpg',
                'is_active' => true,
            ],
            [
                'category_id' => $vegetablesId,
                'name' => 'Fresh Broccoli',
                'slug' => 'fresh-broccoli',
                'sku' => 'HB-BRC-001',
                'description' => 'Organic green broccoli.',
                'price' => 1.90,
                'sale_price' => null,
                'stock' => 90,
                'image' => 'img/vegetable-item-1.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($products as $item) {
            DB::table('products')->updateOrInsert(
                ['slug' => $item['slug']],
                $item + ['updated_at' => now(), 'created_at' => now()]
            );
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name_ar' => 'خضار طازجة', 'name_en' => 'Fresh Vegetables', 'description_ar' => 'خضروات يومية طازجة مختارة بعناية.', 'image_query' => 'fresh vegetables basket'],
            ['name_ar' => 'فواكة طازجة', 'name_en' => 'Fresh Fruits', 'description_ar' => 'تشكيلة فواكه موسمية ومحلية ومستوردة.', 'image_query' => 'fresh fruits market'],
            ['name_ar' => 'ورقيات', 'name_en' => 'Leafy Greens', 'description_ar' => 'ورقيات وأعشاب طازجة.', 'image_query' => 'leafy greens'],
            ['name_ar' => 'مفرزات', 'name_en' => 'Frozen Products', 'description_ar' => 'منتجات جاهزة ومفرزة للاستخدام السريع.', 'image_query' => 'frozen food'],
            ['name_ar' => 'تمور', 'name_en' => 'Dates', 'description_ar' => 'تمور فاخرة ومنتجات التمر.', 'image_query' => 'premium dates'],
            ['name_ar' => 'مخللات وزيتون', 'name_en' => 'Pickles & Olives', 'description_ar' => 'مخللات وزيتون ومنتجات جانبية.', 'image_query' => 'pickles olives jar'],
            ['name_ar' => 'بقوليات', 'name_en' => 'Legumes', 'description_ar' => 'بقوليات ومحاصيل موسمية.', 'image_query' => 'green legumes'],
            ['name_ar' => 'منتجات جاهزة ومؤن', 'name_en' => 'Pantry & Ready Products', 'description_ar' => 'منتجات معبأة مثل الطحينية والمربيات والعسل.', 'image_query' => 'pantry products jars'],
        ];

        foreach ($categories as $index => $item) {
            $slug = Str::slug($item['name_en']);
            DB::table('categories')->updateOrInsert(
                ['slug' => $slug],
                [
                    'name' => $item['name_en'],
                    'name_ar' => $item['name_ar'],
                    'name_en' => $item['name_en'],
                    'description' => $item['description_ar'],
                    'description_ar' => $item['description_ar'],
                    'description_en' => $item['description_ar'],
                    'image' => 'https://source.unsplash.com/1200x900/?' . urlencode($item['image_query']),
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}

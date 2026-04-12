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
            ['name_ar' => 'خضار طازجة', 'name_en' => 'Fresh Vegetables', 'description_ar' => 'خضار يومية طازجة للطبخ والتحضير اليومي.', 'image_keyword' => 'fresh vegetables market'],
            ['name_ar' => 'ورقيات', 'name_en' => 'Leafy Greens', 'description_ar' => 'خس، أعشاب، وخضار ورقية طازجة.', 'image_keyword' => 'leafy greens lettuce'],
            ['name_ar' => 'حمضيات', 'name_en' => 'Citrus', 'description_ar' => 'ليمون، برتقال، كلمنتينا وبوملي.', 'image_keyword' => 'citrus oranges lemons'],
            ['name_ar' => 'فواكه', 'name_en' => 'Fresh Fruits', 'description_ar' => 'تشكيلة فواكه موسمية ومحلية ومستورة.', 'image_keyword' => 'fresh fruits basket'],
            ['name_ar' => 'بقوليات', 'name_en' => 'Legumes', 'description_ar' => 'فول وفاصوليا ومحاصيل موسمية.', 'image_keyword' => 'green beans legumes'],
            ['name_ar' => 'مفرزات وتحضير جاهز', 'name_en' => 'Frozen & Ready Prep', 'description_ar' => 'منتجات محضرة وجاهزة للمطبخ مباشرة.', 'image_keyword' => 'meal prep vegetables tray'],
            ['name_ar' => 'تمور', 'name_en' => 'Dates', 'description_ar' => 'تمور ومنتجات مشتقة من التمر.', 'image_keyword' => 'medjool dates'],
            ['name_ar' => 'مخللات وزيتون', 'name_en' => 'Pickles & Olives', 'description_ar' => 'مقدوس، مخللات وورق عنب جاهز.', 'image_keyword' => 'pickles olives'],
            ['name_ar' => 'مونة ومنتجات منزلية', 'name_en' => 'Pantry & Home Products', 'description_ar' => 'طحينية، مربيات، عسل، وبيض بلدي.', 'image_keyword' => 'pantry jars honey eggs'],
        ];

        foreach ($categories as $index => $item) {
            $slug = Str::slug($item['name_en']);
            $categoryImage = 'https://source.unsplash.com/1200x900/?' . rawurlencode($item['image_keyword']);

            DB::table('categories')->updateOrInsert(
                ['slug' => $slug],
                [
                    'name' => $item['name_en'],
                    'name_ar' => $item['name_ar'],
                    'name_en' => $item['name_en'],
                    'description' => $item['description_ar'],
                    'description_ar' => $item['description_ar'],
                    'description_en' => $item['description_ar'],
                    'image' => $categoryImage,
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}

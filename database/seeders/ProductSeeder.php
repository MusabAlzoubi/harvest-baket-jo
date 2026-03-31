<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categoryMap = DB::table('categories')->pluck('id', 'slug');

        $products = [
            // Fresh Vegetables
            ['ar' => 'بندورة', 'en' => 'Tomato', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'كيلو', 'desc' => 'بندورة طازجة يومية مناسبة للطبخ والسلطات.', 'units' => [['200 غ', '200 g', 0.20], ['نص كيلو', '500 g', 0.25], ['كيلو', '1 kg', 0.35], ['علبة', 'Box', 2.50]]],
            ['ar' => 'خيار', 'en' => 'Cucumber', 'category' => 'fresh-vegetables', 'price' => 0.55, 'unit' => 'كيلو', 'desc' => 'خيار بلدي طازج ومقرمش.', 'units' => [['نص كيلو', '500 g', 0.35], ['كيلو', '1 kg', 0.55], ['علبة', 'Box', 3.00]]],
            ['ar' => 'زهرة', 'en' => 'Cauliflower', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'حبة', 'desc' => 'زهرة طازجة ممتازة للطبخ والتحمير.'],
            ['ar' => 'اسود كلاسيك', 'en' => 'Classic Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.70, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود كلاسيك.'],
            ['ar' => 'اسود عجمي', 'en' => 'Ajami Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود عجمي بطعم مميز.'],
            ['ar' => 'كوسا', 'en' => 'Zucchini', 'category' => 'fresh-vegetables', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'كوسا خضراء طازجة.'],
            ['ar' => 'اسود رفيع', 'en' => 'Slim Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود رفيع.'],
            ['ar' => 'بصل', 'en' => 'Onion', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'كيلو', 'desc' => 'بصل ذهبي للاستخدام اليومي.'],
            ['ar' => 'بطاطا', 'en' => 'Potato', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'كيلو', 'desc' => 'بطاطا طبخ وقلي.'],
            ['ar' => 'بصل احمر', 'en' => 'Red Onion', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'بصل أحمر للسلطات والطبخ.'],
            ['ar' => 'ليمون', 'en' => 'Lemon', 'category' => 'fresh-vegetables', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'ليمون طازج وعصير.'],
            ['ar' => 'ملفوف', 'en' => 'Cabbage', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'حبة', 'desc' => 'ملفوف أخضر طازج.'],
            ['ar' => 'بطاطا حلوه', 'en' => 'Sweet Potato', 'category' => 'fresh-vegetables', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'بطاطا حلوة ممتازة للشوي.'],
            ['ar' => 'ثوم', 'en' => 'Garlic', 'category' => 'fresh-vegetables', 'price' => 4.25, 'unit' => 'كيلو', 'desc' => 'ثوم طازج عالي الجودة.'],
            ['ar' => 'شمندر', 'en' => 'Beetroot', 'category' => 'fresh-vegetables', 'price' => 0.90, 'unit' => 'كيلو', 'desc' => 'شمندر طازج.'],
            ['ar' => 'لفت', 'en' => 'Turnip', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'لفت طازج للطبخ والمخلل.'],
            ['ar' => 'فلفل حلو اخضر', 'en' => 'Green Bell Pepper', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل حلو أخضر.'],
            ['ar' => 'فلفل حار', 'en' => 'Hot Chili', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل حار طازج.'],
            ['ar' => 'فلفل اخضر غزال', 'en' => 'Ghazal Green Pepper', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل أخضر غزال.'],
            ['ar' => 'فلفل ملون', 'en' => 'Mixed Colored Pepper', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'فلفل ملون مشكل.'],
            ['ar' => 'جزر', 'en' => 'Carrot', 'category' => 'fresh-vegetables', 'price' => 0.85, 'unit' => 'كيلو', 'desc' => 'جزر طازج.'],
            ['ar' => 'شري العلبه', 'en' => 'Cherry Tomato Box', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'علبة', 'desc' => 'شيري بندورة - علبة.'],
            ['ar' => 'بصل اخضر', 'en' => 'Green Onion', 'category' => 'leafy-greens', 'price' => 1.25, 'unit' => 'ربطة', 'desc' => 'بصل أخضر طازج.'],
            ['ar' => 'فطر العلبه', 'en' => 'Mushroom Box', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'علبة', 'desc' => 'فطر طازج معبأ.'],
            ['ar' => 'خيار بيبي', 'en' => 'Baby Cucumber', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'علبة', 'desc' => 'خيار بيبي مقرمش.'],
            ['ar' => 'ذره', 'en' => 'Corn', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'حبة', 'desc' => 'ذرة طازجة.'],
            ['ar' => 'فول اخضر', 'en' => 'Green Fava Beans', 'category' => 'legumes', 'price' => 2.00, 'unit' => 'كيلو', 'desc' => 'فول أخضر موسمي.'],
            ['ar' => 'خس بلدي', 'en' => 'Local Lettuce', 'category' => 'leafy-greens', 'price' => 1.00, 'unit' => '3 حبات', 'desc' => 'خس بلدي - 3 حبات بدينار.'],
            ['ar' => 'خس مدور', 'en' => 'Iceberg Lettuce', 'category' => 'leafy-greens', 'price' => 0.50, 'unit' => 'حبة', 'desc' => 'خس مدور طازج.'],
            ['ar' => 'فصوليا بلديه', 'en' => 'Local Green Beans', 'category' => 'legumes', 'price' => 1.50, 'unit' => 'كيلو', 'desc' => 'فاصوليا بلدية.'],
            ['ar' => 'فاصوليا مبرومه', 'en' => 'Twisted Beans', 'category' => 'legumes', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'فاصوليا مبرومة.'],
            ['ar' => 'بروكلي', 'en' => 'Broccoli', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'بروكلي طازج.'],
            ['ar' => 'كوسا محفور الطبق', 'en' => 'Cored Zucchini Tray', 'category' => 'frozen-products', 'price' => 1.25, 'unit' => 'طبق', 'desc' => 'كوسا محفور جاهز للطبخ.'],
            ['ar' => 'بيذنجان محفور الطبق', 'en' => 'Cored Eggplant Tray', 'category' => 'frozen-products', 'price' => 1.25, 'unit' => 'طبق', 'desc' => 'باذنجان محفور جاهز.'],
            ['ar' => 'زعتر اخضر', 'en' => 'Green Thyme', 'category' => 'leafy-greens', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'زعتر أخضر طازج.'],
            ['ar' => 'ملفوف احمر', 'en' => 'Red Cabbage', 'category' => 'fresh-vegetables', 'price' => 1.00, 'unit' => 'حبة', 'desc' => 'ملفوف أحمر.'],
            ['ar' => 'ميرميه', 'en' => 'Sage', 'category' => 'leafy-greens', 'price' => 1.50, 'unit' => 'ربطة', 'desc' => 'ميرمية طازجة.'],
            ['ar' => 'بندورة عناقيد', 'en' => 'Vine Tomato', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'بندورة عناقيد ممتازة.'],
            ['ar' => 'زنجبيل', 'en' => 'Ginger', 'category' => 'fresh-vegetables', 'price' => 3.00, 'unit' => 'كيلو', 'desc' => 'زنجبيل طازج.'],

            // Fresh Fruits
            ['ar' => 'تفاح احمر', 'en' => 'Red Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أحمر مستورد.'],
            ['ar' => 'تفاح اخضر', 'en' => 'Green Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أخضر.'],
            ['ar' => 'تفاح اصفر', 'en' => 'Yellow Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أصفر.'],
            ['ar' => 'برتقال ابو صره', 'en' => 'Navel Orange', 'category' => 'fresh-fruits', 'price' => 1.10, 'unit' => 'كيلو', 'desc' => 'برتقال أبو صرة.'],
            ['ar' => 'كلمنتينا', 'en' => 'Clementine', 'category' => 'fresh-fruits', 'price' => 1.00, 'unit' => 'كيلو', 'desc' => 'كلمنتينا حلوة.'],
            ['ar' => 'بوملي', 'en' => 'Pomelo', 'category' => 'fresh-fruits', 'price' => 1.10, 'unit' => 'حبة', 'desc' => 'بوملي طازج.'],
            ['ar' => 'نجاص سوري', 'en' => 'Syrian Pear', 'category' => 'fresh-fruits', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'نجاص سوري.'],
            ['ar' => 'جوافة', 'en' => 'Guava', 'category' => 'fresh-fruits', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'جوافة طازجة.'],
            ['ar' => 'رمان', 'en' => 'Pomegranate', 'category' => 'fresh-fruits', 'price' => 1.85, 'unit' => 'كيلو', 'desc' => 'رمان أحمر.'],
            ['ar' => 'كاكا اسباني', 'en' => 'Spanish Persimmon', 'category' => 'fresh-fruits', 'price' => 3.50, 'unit' => 'كيلو', 'desc' => 'كاكا إسباني.', 'units' => [['كيلو', '1 kg', 3.50], ['نص كيلو', '500 g', 1.80]]],
            ['ar' => 'كاكا يوناني', 'en' => 'Greek Persimmon', 'category' => 'fresh-fruits', 'price' => 2.35, 'unit' => 'كيلو', 'desc' => 'كاكا يوناني.'],
            ['ar' => 'اڤوكادو', 'en' => 'Avocado', 'category' => 'fresh-fruits', 'price' => 3.00, 'unit' => 'كيلو', 'desc' => 'أفوكادو ناضج.'],
            ['ar' => 'اناناس', 'en' => 'Pineapple', 'category' => 'fresh-fruits', 'price' => 3.00, 'unit' => 'حبة', 'desc' => 'أناناس طازج.'],
            ['ar' => 'قشطه', 'en' => 'Custard Apple', 'category' => 'fresh-fruits', 'price' => 3.50, 'unit' => 'كيلو', 'desc' => 'فاكهة القشطة.'],
            ['ar' => 'قرع اصفر', 'en' => 'Yellow Pumpkin', 'category' => 'fresh-fruits', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'قرع أصفر.'],
            ['ar' => 'موز بلدي', 'en' => 'Local Banana', 'category' => 'fresh-fruits', 'price' => 0.90, 'unit' => 'كيلو', 'desc' => 'موز بلدي.'],
            ['ar' => 'موز صومالي', 'en' => 'Somali Banana', 'category' => 'fresh-fruits', 'price' => 1.50, 'unit' => 'كيلو', 'desc' => 'موز صومالي.'],

            // Dates
            ['ar' => 'تمر مدجول ديلايت', 'en' => 'Medjool Dates Delight', 'category' => 'dates', 'price' => 4.50, 'unit' => 'علبة', 'desc' => 'تمر مدجول فاخر.'],
            ['ar' => 'تمر شوكولاته', 'en' => 'Chocolate Dates', 'category' => 'dates', 'price' => 1.20, 'unit' => 'علبة', 'desc' => 'تمر بالشوكولاتة.'],
            ['ar' => 'دبس تمر 380 غرام', 'en' => 'Date Molasses 380g', 'category' => 'dates', 'price' => 2.50, 'unit' => 'عبوة 380غ', 'desc' => 'دبس تمر طبيعي.'],

            // Pickles & olives
            ['ar' => 'مقدوس جاهز', 'en' => 'Ready Makdous', 'category' => 'pickles-olives', 'price' => 6.00, 'unit' => 'علبة', 'desc' => 'مقدوس جاهز فاخر.'],
            ['ar' => 'ورق عنب', 'en' => 'Stuffed Vine Leaves', 'category' => 'pickles-olives', 'price' => 2.50, 'unit' => 'علبة', 'desc' => 'ورق عنب جاهز.'],
            ['ar' => 'مخلل خيار', 'en' => 'Pickled Cucumber', 'category' => 'pickles-olives', 'price' => 2.25, 'unit' => 'علبة', 'desc' => 'مخلل خيار مقرمش.'],

            // Pantry & ready products
            ['ar' => 'طحينية', 'en' => 'Tahini', 'category' => 'pantry-ready-products', 'price' => 1.65, 'unit' => 'علبة', 'desc' => 'طحينية سمسم.'],
            ['ar' => 'حلاوة', 'en' => 'Halawa', 'category' => 'pantry-ready-products', 'price' => 2.40, 'unit' => 'علبة', 'desc' => 'حلاوة طحينية.'],
            ['ar' => 'خل تفاح نحلتي', 'en' => 'Nahlati Apple Vinegar', 'category' => 'pantry-ready-products', 'price' => 3.00, 'unit' => 'عبوة', 'desc' => 'خل تفاح طبيعي.'],
            ['ar' => 'دبس فلفل حار', 'en' => 'Hot Pepper Paste', 'category' => 'pantry-ready-products', 'price' => 3.75, 'unit' => 'عبوة', 'desc' => 'دبس فلفل حار.'],
            ['ar' => 'دبس فلفل حلو', 'en' => 'Sweet Pepper Paste', 'category' => 'pantry-ready-products', 'price' => 3.75, 'unit' => 'عبوة', 'desc' => 'دبس فلفل حلو.'],
            ['ar' => 'عسل', 'en' => 'Honey', 'category' => 'pantry-ready-products', 'price' => 4.00, 'unit' => 'علبة', 'desc' => 'عسل طبيعي.'],
            ['ar' => 'مربى التين 380 غرام', 'en' => 'Fig Jam 380g', 'category' => 'pantry-ready-products', 'price' => 1.50, 'unit' => 'عبوة 380غ', 'desc' => 'مربى تين 380غ.'],
            ['ar' => 'مربى فراولة 380 غرام', 'en' => 'Strawberry Jam 380g', 'category' => 'pantry-ready-products', 'price' => 1.50, 'unit' => 'عبوة 380غ', 'desc' => 'مربى فراولة 380غ.'],
            ['ar' => 'مربى دبس عنب 380 غرام', 'en' => 'Grape Molasses Jam 380g', 'category' => 'pantry-ready-products', 'price' => 2.50, 'unit' => 'عبوة 380غ', 'desc' => 'مربى دبس عنب 380غ.'],

            // Other requested items
            ['ar' => 'كستنا نخب اول', 'en' => 'Premium Chestnut', 'category' => 'fresh-fruits', 'price' => 5.00, 'unit' => 'كيلو', 'desc' => 'كستنا نخب أول.'],
            ['ar' => 'بيض بلدي', 'en' => 'Local Eggs', 'category' => 'pantry-ready-products', 'price' => 4.50, 'unit' => 'طبق', 'desc' => 'بيض بلدي طبق كامل.'],
        ];

        foreach ($products as $index => $item) {
            $slug = Str::slug($item['en']);
            $categoryId = $categoryMap[$item['category']] ?? null;
            $imageUrl = 'https://source.unsplash.com/1200x900/?' . urlencode($item['en'] . ',food,product');

            DB::table('products')->updateOrInsert(
                ['slug' => $slug],
                [
                    'category_id' => $categoryId,
                    'name' => $item['en'],
                    'name_ar' => $item['ar'],
                    'name_en' => $item['en'],
                    'sku' => 'HB-' . strtoupper(Str::substr(Str::slug($item['en'], ''), 0, 8)),
                    'description' => $item['desc'],
                    'description_ar' => $item['desc'],
                    'description_en' => $item['desc'],
                    'price' => $item['price'],
                    'sale_price' => null,
                    'base_unit' => $item['unit'],
                    'stock' => 100,
                    'image' => $imageUrl,
                    'is_active' => true,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );

            $productId = DB::table('products')->where('slug', $slug)->value('id');
            DB::table('product_unit_prices')->where('product_id', $productId)->delete();

            $units = $item['units'] ?? [[$item['unit'], $item['unit'], $item['price']]];
            foreach ($units as $order => $unit) {
                DB::table('product_unit_prices')->insert([
                    'product_id' => $productId,
                    'unit_ar' => $unit[0],
                    'unit_en' => $unit[1] ?? null,
                    'price' => $unit[2],
                    'sort_order' => $order + 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

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

        $categoryImageKeywords = [
            'fresh-vegetables' => 'fresh vegetables produce',
            'leafy-greens' => 'leafy greens herbs',
            'citrus' => 'citrus fruits lemons oranges',
            'fresh-fruits' => 'fresh fruits market',
            'legumes' => 'green beans legumes',
            'frozen-ready-prep' => 'meal prep vegetable tray',
            'pickles-olives' => 'pickles olives jar',
            'pantry-home-products' => 'pantry grocery shelf',
            'dates' => 'medjool dates',
        ];

        $productImageKeywords = [
            'tomato' => 'fresh tomato',
            'cucumber' => 'fresh cucumber',
            'cauliflower' => 'cauliflower vegetable',
            'zucchini' => 'zucchini vegetable',
            'onion' => 'red onion vegetable',
            'potato' => 'fresh potatoes',
            'lemon' => 'fresh lemon',
            'garlic' => 'garlic cloves',
            'carrot' => 'fresh carrots',
            'broccoli' => 'broccoli',
            'red-apple' => 'red apple',
            'green-apple' => 'green apple',
            'yellow-apple' => 'yellow apple',
            'navel-orange' => 'navel orange',
            'clementine' => 'clementine fruit',
            'pomelo' => 'pomelo fruit',
            'avocado' => 'avocado fruit',
            'pineapple' => 'pineapple fruit',
            'local-banana' => 'banana bunch',
            'somali-banana' => 'banana bunch',
            'ready-makdous-box' => 'makdous jar',
            'grape-leaves-box' => 'grape leaves jar',
            'tahini-box' => 'tahini jar',
            'pickled-cucumber-box' => 'pickled cucumber jar',
            'halawa' => 'halva dessert',
            'honey-box' => 'honey jar',
            'medjool-delight-dates' => 'medjool dates',
            'chocolate-dates-box' => 'chocolate dates',
            'fig-jam-380g' => 'fig jam jar',
            'strawberry-jam-380g' => 'strawberry jam jar',
            'grape-molasses-jam-380g' => 'grape molasses',
            'date-molasses-380g' => 'date molasses',
            'local-eggs-tray' => 'farm eggs tray',
            'farm-fresh-eggs-tray-30' => 'farm eggs tray',
            'double-yolk-eggs-tray-15' => 'eggs tray',
            'double-yolk-eggs-tray-30' => 'eggs tray',
        ];

        $products = [
            ['ar' => 'بندوره', 'en' => 'Tomato', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'كيلو', 'desc' => 'بندورة طازجة يومياً.'],
            ['ar' => 'خيار', 'en' => 'Cucumber', 'category' => 'fresh-vegetables', 'price' => 0.55, 'unit' => 'كيلو', 'desc' => 'خيار طازج ومقرمش.'],
            ['ar' => 'زهره', 'en' => 'Cauliflower', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'حبة', 'desc' => 'زهرة طازجة.'],
            ['ar' => 'اسود كلاسيك', 'en' => 'Classic Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.70, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود كلاسيك.'],
            ['ar' => 'اسود عجمي', 'en' => 'Ajami Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود عجمي.'],
            ['ar' => 'كوسا', 'en' => 'Zucchini', 'category' => 'fresh-vegetables', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'كوسا طازجة.'],
            ['ar' => 'اسود رفيع', 'en' => 'Slim Eggplant', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'باذنجان أسود رفيع.'],
            ['ar' => 'بصل', 'en' => 'Onion', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'كيلو', 'desc' => 'بصل يومي للطبخ.'],
            ['ar' => 'بطااطا', 'en' => 'Potato', 'category' => 'fresh-vegetables', 'price' => 0.50, 'unit' => 'كيلو', 'desc' => 'بطاطا طازجة.'],
            ['ar' => 'بصل احمر', 'en' => 'Red Onion', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'بصل أحمر.'],
            ['ar' => 'ليمون', 'en' => 'Lemon', 'category' => 'citrus', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'ليمون حمضي طازج.'],
            ['ar' => 'ملفوف', 'en' => 'Cabbage', 'category' => 'fresh-vegetables', 'price' => 0.35, 'unit' => 'حبة', 'desc' => 'ملفوف أخضر.'],
            ['ar' => 'بطاطا حلوه', 'en' => 'Sweet Potato', 'category' => 'fresh-vegetables', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'بطاطا حلوة.'],
            ['ar' => 'ثوم', 'en' => 'Garlic', 'category' => 'fresh-vegetables', 'price' => 4.25, 'unit' => 'كيلو', 'desc' => 'ثوم طازج.'],
            ['ar' => 'شمندر', 'en' => 'Beetroot', 'category' => 'fresh-vegetables', 'price' => 0.90, 'unit' => 'كيلو', 'desc' => 'شمندر طازج.'],
            ['ar' => 'لفت', 'en' => 'Turnip', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'كيلو', 'desc' => 'لفت طازج.'],
            ['ar' => 'فلفل حلو اخضر', 'en' => 'Green Bell Pepper', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل حلو أخضر.'],
            ['ar' => 'فلفل حار', 'en' => 'Hot Pepper', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل حار.'],
            ['ar' => 'فلفل اخضر غزال', 'en' => 'Ghazal Green Pepper', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'فلفل أخضر غزال.'],
            ['ar' => 'فلفل ملون', 'en' => 'Colored Pepper Mix', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'فلفل ملون.'],
            ['ar' => 'جزر', 'en' => 'Carrot', 'category' => 'fresh-vegetables', 'price' => 0.85, 'unit' => 'كيلو', 'desc' => 'جزر طازج.'],
            ['ar' => 'شري العلبه', 'en' => 'Cherry Tomato Box', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'علبة', 'desc' => 'علبة شيري.'],
            ['ar' => 'بصل اخضر', 'en' => 'Green Onion', 'category' => 'leafy-greens', 'price' => 1.25, 'unit' => 'ربطة', 'desc' => 'بصل أخضر.'],
            ['ar' => 'فطر العلبه', 'en' => 'Mushroom Box', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'علبة', 'desc' => 'فطر معلب طازج.'],
            ['ar' => 'خيار بيبي', 'en' => 'Baby Cucumber', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'علبة', 'desc' => 'خيار بيبي علبة.'],
            ['ar' => 'ذره', 'en' => 'Corn', 'category' => 'fresh-vegetables', 'price' => 0.60, 'unit' => 'حبة', 'desc' => 'ذرة طازجة.'],
            ['ar' => 'فول اخضر', 'en' => 'Green Fava Beans', 'category' => 'legumes', 'price' => 2.00, 'unit' => 'كيلو', 'desc' => 'فول أخضر.'],
            ['ar' => 'خس بلدي', 'en' => 'Local Lettuce', 'category' => 'leafy-greens', 'price' => 1.00, 'unit' => '3 حبات', 'desc' => '3 حبات بدينار.'],
            ['ar' => 'خس مدور الحبه', 'en' => 'Iceberg Lettuce', 'category' => 'leafy-greens', 'price' => 0.50, 'unit' => 'حبة', 'desc' => 'خس مدور.'],
            ['ar' => 'فصوليا بلديه', 'en' => 'Local Green Beans', 'category' => 'legumes', 'price' => 1.50, 'unit' => 'كيلو', 'desc' => 'فاصوليا بلدية.'],
            ['ar' => 'فاصوليا مبرومه', 'en' => 'Twisted Beans', 'category' => 'legumes', 'price' => 0.75, 'unit' => 'كيلو', 'desc' => 'فاصوليا مبرومة.'],
            ['ar' => 'بروكلي', 'en' => 'Broccoli', 'category' => 'fresh-vegetables', 'price' => 0.80, 'unit' => 'كيلو', 'desc' => 'بروكلي.'],
            ['ar' => 'كوسا محفور الطبق', 'en' => 'Cored Zucchini Tray', 'category' => 'frozen-ready-prep', 'price' => 1.25, 'unit' => 'طبق', 'desc' => 'كوسا محفور جاهز.'],
            ['ar' => 'بيذنجان محفور الطبق', 'en' => 'Cored Eggplant Tray', 'category' => 'frozen-ready-prep', 'price' => 1.25, 'unit' => 'طبق', 'desc' => 'باذنجان محفور جاهز.'],
            ['ar' => 'زعتر اخضر', 'en' => 'Green Thyme', 'category' => 'leafy-greens', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'زعتر أخضر.'],
            ['ar' => 'ملفوف احمر', 'en' => 'Red Cabbage', 'category' => 'fresh-vegetables', 'price' => 1.00, 'unit' => 'حبة', 'desc' => 'ملفوف أحمر.'],
            ['ar' => 'ميرميه', 'en' => 'Sage', 'category' => 'leafy-greens', 'price' => 1.50, 'unit' => 'ربطة', 'desc' => 'ميرمية.'],
            ['ar' => 'بندوره عناقيد', 'en' => 'Vine Tomato', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'بندورة عناقيد.'],
            ['ar' => 'زنجبيل', 'en' => 'Ginger', 'category' => 'fresh-vegetables', 'price' => 3.00, 'unit' => 'كيلو', 'desc' => 'زنجبيل طازج.'],

            ['ar' => 'تفاح احمر', 'en' => 'Red Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أحمر.'],
            ['ar' => 'تفاح اخضر', 'en' => 'Green Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أخضر.'],
            ['ar' => 'تفاح اصفر', 'en' => 'Yellow Apple', 'category' => 'fresh-fruits', 'price' => 1.60, 'unit' => 'كيلو', 'desc' => 'تفاح أصفر.'],
            ['ar' => 'برتقال ابو صره', 'en' => 'Navel Orange', 'category' => 'citrus', 'price' => 1.10, 'unit' => 'كيلو', 'desc' => 'برتقال أبو صرة.'],
            ['ar' => 'كلمنتينا', 'en' => 'Clementine', 'category' => 'citrus', 'price' => 1.00, 'unit' => 'كيلو', 'desc' => 'كلمنتينا.'],
            ['ar' => 'بوملي', 'en' => 'Pomelo', 'category' => 'citrus', 'price' => 1.10, 'unit' => 'حبة', 'desc' => 'بوملي.'],
            ['ar' => 'نجاص سوري', 'en' => 'Syrian Pear', 'category' => 'fresh-fruits', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'نجاص سوري.'],
            ['ar' => 'جوافة', 'en' => 'Guava', 'category' => 'fresh-fruits', 'price' => 2.50, 'unit' => 'كيلو', 'desc' => 'جوافة.'],
            ['ar' => 'رمان', 'en' => 'Pomegranate', 'category' => 'fresh-fruits', 'price' => 1.85, 'unit' => 'كيلو', 'desc' => 'رمان.'],
            ['ar' => 'كاكا اسباني', 'en' => 'Spanish Persimmon', 'category' => 'fresh-fruits', 'price' => 3.50, 'unit' => 'كيلو', 'desc' => 'كاكا اسباني.'],
            ['ar' => 'كاكا يوناني', 'en' => 'Greek Persimmon', 'category' => 'fresh-fruits', 'price' => 2.35, 'unit' => 'كيلو', 'desc' => 'كاكا يوناني.'],
            ['ar' => 'اڤوكادو', 'en' => 'Avocado', 'category' => 'fresh-fruits', 'price' => 3.00, 'unit' => 'كيلو', 'desc' => 'افوكادو.'],
            ['ar' => 'اناناس', 'en' => 'Pineapple', 'category' => 'fresh-fruits', 'price' => 3.00, 'unit' => 'حبة', 'desc' => 'اناناس.'],
            ['ar' => 'كستنا نخب اول', 'en' => 'Premium Chestnut', 'category' => 'fresh-fruits', 'price' => 5.00, 'unit' => 'كيلو', 'desc' => 'كستنا نخب اول.'],
            ['ar' => 'قشطه', 'en' => 'Custard Apple', 'category' => 'fresh-fruits', 'price' => 3.50, 'unit' => 'كيلو', 'desc' => 'قشطة.'],
            ['ar' => 'قرع اصفر', 'en' => 'Yellow Pumpkin', 'category' => 'fresh-vegetables', 'price' => 1.25, 'unit' => 'كيلو', 'desc' => 'قرع أصفر.'],
            ['ar' => 'موز بلدي', 'en' => 'Local Banana', 'category' => 'fresh-fruits', 'price' => 0.90, 'unit' => 'كيلو', 'desc' => 'موز بلدي.'],
            ['ar' => 'موز صومالي', 'en' => 'Somali Banana', 'category' => 'fresh-fruits', 'price' => 1.50, 'unit' => 'كيلو', 'desc' => 'موز صومالي.'],

            ['ar' => 'مقدوس جاهز العلبه', 'en' => 'Ready Makdous Box', 'category' => 'pickles-olives', 'price' => 6.00, 'unit' => 'علبة', 'desc' => 'مقدوس جاهز.'],
            ['ar' => 'ورق عنب العلبه', 'en' => 'Grape Leaves Box', 'category' => 'pickles-olives', 'price' => 2.50, 'unit' => 'علبة', 'desc' => 'ورق عنب جاهز.'],
            ['ar' => 'طحينيه العلبه', 'en' => 'Tahini Box', 'category' => 'pantry-home-products', 'price' => 1.65, 'unit' => 'علبة', 'desc' => 'طحينية.'],
            ['ar' => 'مخلل خيار العلبه', 'en' => 'Pickled Cucumber Box', 'category' => 'pickles-olives', 'price' => 2.25, 'unit' => 'علبة', 'desc' => 'مخلل خيار.'],
            ['ar' => 'حلاوه', 'en' => 'Halawa', 'category' => 'pantry-home-products', 'price' => 2.40, 'unit' => 'علبة', 'desc' => 'حلاوة.'],
            ['ar' => 'خل تفاح نحلتي', 'en' => 'Nahlati Apple Vinegar', 'category' => 'pantry-home-products', 'price' => 3.00, 'unit' => 'عبوة', 'desc' => 'خل تفاح نحلتي.'],
            ['ar' => 'دبس فلفل حار', 'en' => 'Hot Pepper Paste', 'category' => 'pantry-home-products', 'price' => 3.75, 'unit' => 'عبوة', 'desc' => 'دبس فلفل حار.'],
            ['ar' => 'دبس فلفل حلو', 'en' => 'Sweet Pepper Paste', 'category' => 'pantry-home-products', 'price' => 3.75, 'unit' => 'عبوة', 'desc' => 'دبس فلفل حلو.'],
            ['ar' => 'عسل العلبه', 'en' => 'Honey Box', 'category' => 'pantry-home-products', 'price' => 4.00, 'unit' => 'علبة', 'desc' => 'عسل طبيعي.'],
            ['ar' => 'تمر مدجول ديلايت', 'en' => 'Medjool Delight Dates', 'category' => 'dates', 'price' => 4.50, 'unit' => 'علبة', 'desc' => 'تمر مدجول.'],
            ['ar' => 'تمر شوكولاته العلبه', 'en' => 'Chocolate Dates Box', 'category' => 'dates', 'price' => 1.20, 'unit' => 'علبة', 'desc' => 'تمر بالشوكولاتة.'],
            ['ar' => 'مربى التين 380 غرام', 'en' => 'Fig Jam 380g', 'category' => 'pantry-home-products', 'price' => 1.50, 'unit' => '380 غرام', 'desc' => 'مربى تين 380غ.'],
            ['ar' => 'مربى فراوله 380 غرام', 'en' => 'Strawberry Jam 380g', 'category' => 'pantry-home-products', 'price' => 1.50, 'unit' => '380 غرام', 'desc' => 'مربى فراولة 380غ.'],
            ['ar' => 'مربى دبس عنب 380 غرام', 'en' => 'Grape Molasses Jam 380g', 'category' => 'pantry-home-products', 'price' => 2.50, 'unit' => '380 غرام', 'desc' => 'مربى دبس عنب 380غ.'],
            ['ar' => 'دبس تمر 380 غرام', 'en' => 'Date Molasses 380g', 'category' => 'dates', 'price' => 2.50, 'unit' => '380 غرام', 'desc' => 'دبس تمر 380غ.'],
            ['ar' => 'بيض بلدي الطبق', 'en' => 'Local Eggs Tray', 'category' => 'pantry-home-products', 'price' => 4.50, 'unit' => 'طبق', 'desc' => 'بيض بلدي طبق.'],
            ['ar' => 'بيض مزارع طازج طبق 30 بيضة', 'en' => 'Farm Fresh Eggs Tray 30', 'category' => 'pantry-home-products', 'price' => 4.25, 'unit' => 'طبق 30 بيضة', 'desc' => 'بيض مزارع طازج - طبق 30 بيضة.'],
            ['ar' => 'بيض صفارين طبق 15 بيضة', 'en' => 'Double Yolk Eggs Tray 15', 'category' => 'pantry-home-products', 'price' => 3.25, 'unit' => 'طبق 15 بيضة', 'desc' => 'بيض صفارين - طبق 15 بيضة.'],
            ['ar' => 'بيض صفارين طبق 30 بيضة', 'en' => 'Double Yolk Eggs Tray 30', 'category' => 'pantry-home-products', 'price' => 6.25, 'unit' => 'طبق 30 بيضة', 'desc' => 'بيض صفارين - طبق 30 بيضة.'],
        ];

        foreach ($products as $item) {
            $slug = Str::slug($item['en']);
            $categoryId = $categoryMap[$item['category']] ?? null;
            $imageKeyword = $productImageKeywords[$slug] ?? ($categoryImageKeywords[$item['category']] ?? 'fresh produce');
            $imageUrl = 'https://source.unsplash.com/1200x900/?' . rawurlencode($imageKeyword);
            $sku = 'HB-' . strtoupper(Str::substr(Str::slug($item['en'], ''), 0, 8));

            // Prevent collisions for similarly named products (e.g. hot/sweet pepper paste).
            if (DB::table('products')->where('sku', $sku)->where('slug', '!=', $slug)->exists()) {
                $sku .= '-' . strtoupper(Str::substr(md5($slug), 0, 4));
            }

            DB::table('products')->updateOrInsert(
                ['slug' => $slug],
                [
                    'category_id' => $categoryId,
                    'name' => $item['en'],
                    'name_ar' => $item['ar'],
                    'name_en' => $item['en'],
                    'sku' => $sku,
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
            DB::table('product_unit_prices')->insert([
                'product_id' => $productId,
                'unit_ar' => $item['unit'],
                'unit_en' => $item['unit'],
                'price' => $item['price'],
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

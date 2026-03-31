<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'store_name', 'value' => 'Harvest Basket Jo'],
            ['key' => 'store_name_ar', 'value' => 'سلة الحصاد'],
            ['key' => 'currency', 'value' => 'JOD'],
            ['key' => 'phone', 'value' => '+962000000000'],
            ['key' => 'address', 'value' => 'Amman, Jordan'],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                ['value' => $setting['value'], 'updated_at' => now(), 'created_at' => now()]
            );
        }
    }
}

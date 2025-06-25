<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            [
                'name' => 'iPhone 14',
                'description' => 'Latest Apple phone with A15 chip',
                'price' => 79000.00,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Phone Case',
                'description' => 'Compatible with all major phones',
                'price' => 500.00,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Wireless Charger',
                'description' => 'Charge your phone without cables',
                'price' => 1500.00,
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Ergonomic stand for laptops',
                'price' => 1200.00,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

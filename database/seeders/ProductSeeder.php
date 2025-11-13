<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
        [
            'name_product' => 'Abbey Road',
            'price_product' => 550000,
            'stock_product' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'The Dark Side of the Moon',
            'price_product' => 600000,
            'stock_product' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'Back in Black',
            'price_product' => 500000,
            'stock_product' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'Thriller',
            'price_product' => 650000,
            'stock_product' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'Rumours',
            'price_product' => 450000,
            'stock_product' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => '(1998 Remaster) The Beatles',
            'price_product' => 700000,
            'stock_product' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'DECIDE',
            'price_product' => 580000,
            'stock_product' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => '1998 (Taylor\'s Version)',
            'price_product' => 520000,
            'stock_product' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'SMITHEREENS',
            'price_product' => 630000,
            'stock_product' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name_product' => 'The Wall',
            'price_product' => 610000,
            'stock_product' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    
    ]);
    }
}

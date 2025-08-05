<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 15', 'price' => 32900.00]);
        Product::create(['name' => 'Samsung Galaxy S24', 'price' => 33900.00]);
        Product::create(['name' => 'Google Pixel 8', 'price' => 24900.00]);
    }
}

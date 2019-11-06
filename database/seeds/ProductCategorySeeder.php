<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'category_name' => "Cardigan"
        ]);
        ProductCategory::create([
            'category_name' => "Hoodie"
        ]);
        ProductCategory::create([
            'category_name' => "Jaket"
        ]);
        ProductCategory::create([
            'category_name' => "Kaos"
        ]);
        ProductCategory::create([
            'category_name' => "Shoes"
        ]);
        ProductCategory::create([
            'category_name' => "Sweater"
        ]);
        ProductCategory::create([
            'category_name' => "Kemeja"
        ]);
    }
}

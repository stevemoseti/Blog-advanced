<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'category_name'=>'smartphones'
        ]);
        $category2= Category::create([
            'category_name'=>'SmartTVS'
        ]);
        $category3 = Category::create([
            'category_name'=>'Appliances'
        ]);
        $category4 = Category::create([
            'category_name'=>'Watches'
        ]);
        $brand1 = Brand::create([
            'brand_name'=>'Iphone'
        ]);
         $brand2 = Brand::create([
            'brand_name'=>'Hisense'
        ]);
         $brand3 = Brand::create([
            'brand_name'=>'chargers'
        ]);
         $brand4 = Brand::create([
            'brand_name'=>'Touchscreen'
        ]);
        $p1 = [
          'product_title'=>'Iphone',
          'product_price'=>'12000',
          'product_description'=>'This is the best phone in africe',
          'product_image'=>'uploads/products/iphone',
          'product_quantity'=>'4',
          'category_id'=>$category1->id,
          'brand_id'=>$brand1->id
          
        ];
        $p2 = [
           'product_title'=>'Hisense smart TV',
          'product_price'=>'15000',
          'product_description'=>'This is the best TV in africe',
          'product_image'=>'uploads/products/Hisense.jpg',
          'product_quantity'=>'8',
          'category_id'=>$category2->id,
          'brand_id'=>$brand2->id
          
        ];
        $p3 = [
          'product_title'=>'Fast Charger',
          'product_price'=>'700',
          'product_description'=>'This is the best Charger in africe',
          'product_image'=>'uploads/products/charger.jpg',
          'product_quantity'=>'8',
          'category_id'=>$category3->id,
          'brand_id'=>$brand3->id
          
        ];
        $p4 = [
          'product_title'=>'SmartWatch',
          'product_price'=>'5200',
          'product_description'=>'This is the best watch in africe',
          'product_image'=>'uploads/products/watch.jpg',
          'product_quantity'=>'2',
          'category_id'=>$category4->id,
          'brand_id'=>$brand4->id
          
        ];
        
        Product::create($p1,$p2,$p3,$p4);
    }
}

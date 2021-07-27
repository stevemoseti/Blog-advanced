<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_title',
        'product_price',
        'product_description',
        'product_image',
        'product_quantity',
        'category_id',
        'brand_id',
    ];
    // the products model belong to category model
   public function category()
    {
       return $this->belongsTo(Category::class);
    }
    //the product model belong to certain brand model-one brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}

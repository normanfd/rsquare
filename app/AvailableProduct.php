<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableProduct extends Model
{
    protected $fillable = ['category_id','product_id', 'product_name', 'product_price', 'product_rating', 'product_image', 'product_stock', 'product_brand', 'product_desc'];

    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    protected $fillable = ['category_id', 'shirt_id', 'shirt_name', 'shirt_desc', 'shirt_price', 'shirt_image'];
}

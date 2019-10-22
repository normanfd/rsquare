<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    protected $fillable = ['category_id', 'shoes_id', 'shoes_name', 'shoes_desc', 'shoes_price', 'shoes_image'];
}

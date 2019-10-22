<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoodie extends Model
{
    protected $fillable = ['category_id', 'hoodie_id', 'hoodie_name', 'hoodie_desc', 'hoodie_price', 'hoodie_image'];
}

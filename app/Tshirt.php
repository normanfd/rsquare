<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    protected $fillable = ['category_id', 'tshirt_id', 'tshirt_name', 'tshirt_desc', 'tshirt_price', 'tshirt_image'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jacket extends Model
{
    protected $fillable = ['category_id', 'jacket_id', 'jacket_name', 'jacket_desc', 'jacket_price', 'jacket_image'];
}

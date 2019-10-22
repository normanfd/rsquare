<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cardigan extends Model
{
    protected $fillable = ['category_id', 'cardigan_id', 'cardigan_name', 'cardigan_desc', 'cardigan_price', 'cardigan_image'];
}

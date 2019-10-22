<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sweater extends Model
{
    protected $fillable = ['category_id', 'sweater_id', 'sweater_name', 'sweater_desc', 'sweater_price', 'sweater_image'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoesOrder extends Model
{
    protected $fillable = ['shoes_id', 'color', 'material', 'size', 'amount', 'wa_number', 'note', 'user_id'];
}

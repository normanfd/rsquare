<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableProductOrder extends Model
{
    protected $fillable = ['availableproduct_id', 'user_id', 'size', 'amount', 'wa_number', 'note'];
}

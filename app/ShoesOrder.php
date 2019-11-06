<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoesOrder extends Model
{
    protected $fillable = ['shoes_id', 'color', 'material', 'size', 'amount', 'wa_number', 'note', 'user_id'];

    public function shoes(){
        return $this->belongsTo(Shoes::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

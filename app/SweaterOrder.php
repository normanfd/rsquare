<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SweaterOrder extends Model
{
    protected $fillable = ['sweater_id', 'user_id', 'color', 'collar', 'material','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];

    public function sweater(){
        return $this->belongsTo(Sweater::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

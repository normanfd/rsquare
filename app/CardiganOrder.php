<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardiganOrder extends Model
{
    protected $fillable = ['cardigan_id', 'user_id', 'color', 'collar', 'material','buttons','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];
}

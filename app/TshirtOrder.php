<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TshirtOrder extends Model
{
    protected $fillable = ['tshirt_id', 'user_id', 'color', 'material','sleeve','size', 'upload_design','amount', 'wa_number', 'note'];
}

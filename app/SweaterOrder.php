<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SweaterOrder extends Model
{
    protected $fillable = ['sweater_id', 'user_id', 'color', 'collar', 'material','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];
}

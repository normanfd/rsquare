<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoodieOrder extends Model
{
    protected $fillable = ['hoodie_id', 'user_id', 'material','color', 'collar','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];
}

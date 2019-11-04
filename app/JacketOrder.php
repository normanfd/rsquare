<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JacketOrder extends Model
{
    protected $fillable = ['jacket_id', 'user_id', 'material','color', 'collar','buttons','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];
}

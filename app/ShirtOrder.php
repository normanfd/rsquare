<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShirtOrder extends Model
{
    protected $fillable = ['shirt_id', 'user_id', 'color', 'collar', 'material','buttons','sleeve','sleeve_model', 'pocket','size', 'upload_design','amount', 'wa_number', 'note'];
}

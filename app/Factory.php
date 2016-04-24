<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $fillable = [
        'name', 'change','fix','country_code'
    ];
}

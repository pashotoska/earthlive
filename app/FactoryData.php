<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryData extends Model
{
    protected $fillable = [
        'factory_id','year','value','unit'
    ];
}

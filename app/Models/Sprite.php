<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprite extends Model
{
    function materials(){
        return $this->belongsTo('App\Models\Material');
    }
}

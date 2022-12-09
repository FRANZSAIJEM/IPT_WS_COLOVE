<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function objects(){
        return $this->hasMany('App\Models\Object');
    }
}

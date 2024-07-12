<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;
    public function gols(){

        return $this->hasMany('App\Models\gol');
    }

    public function equipos(){

        return $this->belongsToMany('App\Models\equipo');
    }

}

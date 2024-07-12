<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;

    public function equipo(){
return $this->belongsTo('App\Models\equipo');

    }

    public function gols(){
return $this->hasMany('App\Models\gol');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;

    public function presidente(){

        return $this->belongsTo('App\Models\presidente');

    }

    public function jugadors(){

return $this->hasMany('App\Models\jugador');

    }

    public function partidos(){

        return $this->belongsToMany('App\Models\partido');
    }
}

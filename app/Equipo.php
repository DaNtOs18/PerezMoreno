<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function user(){
        return $this->belongsToMany("App\User");
    }

    public function incidencias()
    {
        return $this->hasMany("App\Incidencia");
    }

    protected $fillable=[
        "tipo",
        "marca",
        "modelo",
        "garantia"
    ];

}

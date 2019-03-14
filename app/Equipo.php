<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function user(){
        return $this->belongsTo("App\User");
    }

    public function incidencias()
    {
        return $this->hasMany("App\Incidencia");
    }

    protected $fillable=[
        "user_id",
        "tipo",
        "marca",
        "modelo",
        "garantia",
        "especificaciones"
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    protected $table ="rutas";

    protected $fillable = [
    	'distancia','duracion','tarifa','id_destino','id_origen'
    ];

    public function origen(){
    	return $this->belongsTo('App\Sucursal','id_origen','id');
    }
    public function detino(){
    	return $this->belongsTo('App\Sucursal','id_destino','id');
    }
    public function administrativos(){
    	return $this->hasMany('App\Administrativo');
    }

}

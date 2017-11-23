<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pierna extends Model
{
    protected $table ="piernas";

    protected $fillable = [
    	'id_aeronave','id_vuelo','id_ruta'
    ];

    public function aeronave(){
    	return $this->belongsTo('App\Aeronave');
    }

    public function vuelo(){
    	return $this->belongsTo('App\Vuelo');
    }

    public function ruta(){
    	return $this->belongsTo('App\Ruta');
    }
    
}

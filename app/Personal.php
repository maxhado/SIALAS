<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table ="personales";

    protected $fillable =[
	'nombres','apellidos','cedula','tlf_movil','tlf_casa','direccion'
	];

    public function user(){
    	return $this->belongsTo('App\user');
    }

    public function tripulante(){
    	return $this->hasOne('App\Tripulante');
    }
    public function administrativo(){
    	return $this->hasOne('App\Administrativo');
    }

}

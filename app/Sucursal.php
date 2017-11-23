<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    protected $fillable = ['nombre','direccion'];

    public function administrativos(){
    	return $this->hasMany('App\Administrativo');
    }
}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $table = 'administrativos';
    protected $fillable = ['horas_laboradas','horas_extras',
	'cargo','id_personal','id_sucursal'];

	public function personal(){
        //$this->hasOne('App\Personal','id_personal','id');
        return $this->hasOne('App\Personal');
    }

    Public function sucursal(){
    	return $this->belongsTo('App\Sucursal');
    }

}


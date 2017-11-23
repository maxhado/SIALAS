<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tripulante extends Model
{
    protected $table = 'tripulantes';
    protected $fillable = ['rango','id_personal'];

    public function personal(){
        //$this->hasOne('App\Personal','id_personal','id');
        return $this->hasOne('App\Personal');
    }
    public function vuelos(){
    	return $this->belongsToMany('App\Vuelo');
    }
}





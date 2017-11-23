<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    protected $table ="vuelos";

    protected $fillable = [
        'titulo', 'contenido', 'categoria_id','user_id'
    ];

    public function boletos(){
    	return $this->hasMany('App\boleto');
    }

    public function tripulantes(){
    	return $this->belongsToMany('App\Tripulante');
    }
    
}

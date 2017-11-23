<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horas_laboradas extends Model
{
    protected $table ="horas_laboradas";

    protected $fillable = [
    	'hora_entrada','hora_salida','id_administrativos'
    ];

    public function administrativo(){
    	return $this->belongsTo('App\Administrativos');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boleto extends Model
{

	protected $table ="boletos";

    protected $fillable = [
    	'estado','id_cliente','id_vuelo'
    ];

    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
    public function vuelo(){
    	return $this->belongsTo('App\Vuelo');
    }
            
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['descripcion','id_cliente'];

    public function cliente(){
    	return $this->hasOne('App\Cliente');
    }
}


 
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombres','apellidos','cedula',
    'tlf_movil','tlf_casa','direccion'];
}

public function equipajes(){
	return $this->hasMany('App\Equipaje');
}
public function facturas(){
	return $this->hasMany('App\Factura');
}
public function boletos(){
	return $this->hasMany('App\Boleto');
}



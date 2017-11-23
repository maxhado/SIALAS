<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipaje extends Model
{
    protected $table ="equipajes";

    protected $fillable = [
        'peso','id_cliente'
    ];
    
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
}

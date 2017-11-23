<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table ="users";

    protected $fillable = [
        'name','username','tipo','password','email','id_personal'
    ];

    public function personal(){
        return $this->hasOne('App\personal');
    }


}

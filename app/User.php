<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','role_id','photo_id','is_active','created_at','updated_at',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

      return $this->belongsTo('App\Role');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}

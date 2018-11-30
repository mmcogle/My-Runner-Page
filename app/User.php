<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function FitnessProfile(){
        return $this->hasOne('App\FitnessProfile');
    }

    public function Lists(){
        return $this->hasOne('App\Lists');
    }
    public function Routes(){
        return $this->hasOne('App\Routes');
    }
    public function Plan(){
        return $this->hasOne('App\Plan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    public function Comments(){
        return $this->hasMany('App\Comments');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    //
}

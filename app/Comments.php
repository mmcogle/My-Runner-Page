<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function Routes(){
        return $this->belongsTo('App\Routes');
    }
    //
}

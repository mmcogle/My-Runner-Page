<?php

Route::get('/', function(){
    $routes= DB::table('routes')->get();
    dd($users);
}


);
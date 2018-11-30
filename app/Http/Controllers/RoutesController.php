<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Routes;
use App\User;

class RoutesController extends Controller
{
    public function index(){
        $Routes= DB::table('routes')->orderBy('distance','asc')
                                    ->get();
        return view('routes')
        ->with('route', $Routes);
        
    }
    public function display($id){
        $route= Routes::find($id);
        return view('singleRoute')->with('trail', $route);
    }
    public function add($id){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $route=Routes::find($id);
        $copy=$route;
        $user->Routes()->save($copy);   
        /*$user->Routes()->update(['routeName'=>$route->routeName,
        'distance'=>$route->distance,
        'scenery'=>$route->scenery,
        'difficulty'=>$route->difficulty,
        'popularity'=>$route->popularity
]);*/
        return redirect()-> action('UserController@index2');
        
    }
}

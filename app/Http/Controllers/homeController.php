<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\FitnessProfile;

class homeController extends Controller
{
    public function index(){
        //$user_id= auth()->user('id');
        //$user= User::find($user_id);
        //$profiles=DB::table('FitnessProfiles')->where('user_id',$user_id)->first();
        //$profiles= FitnessProfile::where('user_id',$user_id)->first();
        return view('welcome');//->with('profile', $profiles);
    }
    //
}

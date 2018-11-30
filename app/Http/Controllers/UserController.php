<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){
        return view('createUser');

    }

    public function front(){
        return view('front');
    }
    public function storeFront(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required'
        ]);
        return view('home');
    }

    public function index2(){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        return view('home')->with('user',$user);
    }

    public function store2(){
        return view('home');

    }

    public function account(){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);

        return view('account')->with('user', $user);
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password2'=>'required'
        ]);
        $name= $request->input('name');
        $email= $request->input('email');
        $password= $request->input('password');
        $password2= $request->input('password2');


        $data=array('name'=>$name,'email'=>$email, 'password'=>$password);
        DB::table('users')->insert($data);
        return view('home');


    }
    //
}

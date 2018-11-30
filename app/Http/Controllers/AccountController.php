<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use Image;

class AccountController extends Controller
{
    //
    public function editName(Request $request){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $user->update([
            'name'=>$request->input('name')
        ]);
        return redirect('/Account')->with('user', $user);
    }
    public function editName1(Request $request){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        
        return view('accountNameEdit')->with('user', $user);
    }

    public function updateAvatar(Request $request){
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user_id=auth()->user()->id;
            $user=User::find($user_id);
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return view('account')->with('user',$user);
    
    }

    public function updatePassword(request $request){
        /*$this->validate($request, [
            'password'=>'same:users'
        ]);*/
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $pass= $request->input('password_new');
        $pass2= $request->input('password-confirm');
        if($pass==$pass2){
            $user->update([
                'password'=>bcrypt($pass)
            ]);
            return redirect('/Account')->with('user',$user);
        }
        else{
            return redirect('/Account/Password')->with('message','Passwords do not match');
        }
        

    }
    public function updatePassword1(request $request){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        
        return view('accountPasswordEdit')->with('user', $user);
    }
}

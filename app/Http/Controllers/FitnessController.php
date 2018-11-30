<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FitnessProfile;
use App\User;
class FitnessController extends Controller
{
    public function index(){
        
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        
        //$user->FitnessProfile["weight"]='1';
        //$user->FitnessProfile->save();
        //echo dd($user->FitnessProfile["weight"]);
        return view('Healthprofile') ->with('weights',$user->FitnessProfile);

 
        
     }
     public function create(Request $request){
    
        return view('createFitness');
 
         }
         public function edit1(Request $request){
    
            return view('EditFitness');
     
             }

         public function create2(Request $request){
            $user_id=auth()->user()->id;
            $user=User::find($user_id);
            $this->validate($request,[
                 'weight'=>'required',
                 'height'=>'required'
                 //'Blood Type'=>'required',
                 //'Gender'=>'required'
             ]);
             $profile =new FitnessProfile;
             $profile->weight= $request->input('weight');
             $profile->height= $request->input('height');
             $profile->bloodType= $request->input('bloodType');
             $profile->gender= $request->input('Gender');
 
            $profile->save();
            $user->FitnessProfile()->save($profile);
            echo $user->FitnessProfile->weight; 
        
         return view('Healthprofile')
         ->with('weights',$user->FitnessProfile);
 
             
             }

         public function edit(Request $request){
            $user_id=auth()->user()->id;
            $user=User::find($user_id);
            $this->validate($request,[
                 'weight'=>'required',
                 'height'=>'required'
                 //'Blood Type'=>'required',
                 //'Gender'=>'required'
             ]);
             $profile =new FitnessProfile;
             $profile->weight= $request->input('weight');
             $profile->height= $request->input('height');
             $profile->bloodType= $request->input('bloodType');
             $profile->gender= $request->input('Gender');
 
            $profile->save();
            $user->FitnessProfile()->update(['weight'=>$profile->weight,
                        'height'=>$profile->height,
                        'bloodType'=>$profile->bloodType,
                        'gender'=>$profile->gender
            ]);
            
         
            return view('Healthprofile')
            ->with('weights',$user->FitnessProfile);
             
             }
    //
}

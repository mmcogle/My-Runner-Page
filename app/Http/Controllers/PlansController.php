<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Plan;
use App\FitnessPlan;
use App\User;
use App\Http\Controllers\FitnessController;
class PlansController extends Controller
{
    public function index(){
        $plans=DB::table('plans')->orderBy('activity', 'asc')
        ->orderBy('distance','asc')->get();
        return view('Plans')
        ->with('plans', $plans);


       
    }
    public function cardio(){
        $plans=DB::table('plans')->where([
            ['activity', '>', 'Go for a '],
            ['activity', '<','Weight Lifting!']])
                ->orderBy('activity', 'desc')
                ->orderBy('duration','asc')
                ->get();

        return view('plansCardio')
        ->with('plans', $plans);
    }
    public function gains(){
        $plans=DB::table('plans')->where('activity', '=', 'Weight Lifting!')            
                ->orderBy('duration','asc')
                ->get();

        return view('plansGains')
        ->with('plans', $plans);

    }
    public function display($id){
        $plan=Plan::find($id);
        return view('singlePlan')->with('plan',$plan);

    }

    public function add($id){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $plan=Plan::find($id);
        $user->Plan()->save($plan);      
        
        return redirect()-> action('UserController@index2');
    }
    //
}

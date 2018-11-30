@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                
                <div class="panel panel-default">
                       <center> <h1>Health Profile</h1>
                    @if(count($user->FitnessProfile)>0)
                    
                         <li>Weight: {{$user->FitnessProfile->weight}}</li>
                        <li>Height: {{$user->FitnessProfile->height}}</li>
                        
                    @endif
                    <a href="{{ action('FitnessController@index') }}"> Edit Health Profile</a>
                    </center>
                    </div>
                    <div class="panel panel-default">
                   <center> <h1>Fitness Plans</h1>
                    @if(count($user->Plan)>0)
                    
                    <li>Activity: {{$user->Plan->activity}}</li>
                    <li>Duration (minutes): {{$user->Plan->duration}}</li>
                    <li>Days Per Week: {{$user->Plan->repeat}}</li>
                    <li>Calories Per Session: {{$user->Plan->calories}}</li>
                    
                    
                    @endif
                    <a href="{{ action('PlansController@index') }}"> View Fitness Plans</a>
                    </center>
                    </div>
                    <div class="panel panel-default">
                   <center> <h1>Running Routes</h1>
                    @if(count($user->Routes)>0)
                    
                        <li>Route Name: {{$user->Routes->routeName}} </li>
                        <li>Distance (in Kilometers): {{$user->Routes->distance}} </li>
                        <li>Scenery: {{$user->Routes->scenery}} </li>
                    
                    
                    @endif
                    <a href="{{ action('RoutesController@index') }}"> View Running Routes</a>
                    </center>
                </div>

                    
                    
                   
                   
                    @if (session('status'))
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

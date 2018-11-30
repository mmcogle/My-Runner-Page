<!DOCTYPE html>
@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                
                <div class="panel panel-default">
                <form action="{{ action('AccountController@editName') }}" method="POST">
                        {{ csrf_field() }}
                       <center> 
                        <br></br>
                         Current Name: {{$user->name}}
                         <br></br> Name Change<input type="text" name="name" id="name">
                        
                    <br></br>
                    <button type="submit">Update</button>
                    
                    </center>
                    </form>
                    </div>
                </div>
            </div>

@endsection
<!DOCTYPE html>
@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                
                <div class="panel panel-default">
                       <center> <h1>{{$user->name}}'s Account</h1></center>
                       <br></br>
                       <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                       <form enctype="multipart/form-data" action="/Account" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                       <br></br><br></br><br></br> <br></br>
                    <a href="{{action ('AccountController@editName1')}}"> Update Name</a>
                    <br></br>
                    <a href="{{ action('AccountController@updatePassword') }}"> Update Password</a>
                    <br></br><br></br><br></br>
                    </div>
                </div>
            </div>

@endsection
<!DOCTYPE html>
@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <center>
    <div class="alert alert-failure">
        {{session()->get('message')}}
    </div>
    </center>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <center> <div class="panel-heading">Update Password</div></center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ action('AccountController@updatePassword') }}">
                        {{ csrf_field() }}

                
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password_new" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password_new" type="password" class="form-control" name="password_new" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password-confirm" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

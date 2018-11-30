<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
    
    <form action="{{ action('CommentController@store', $route->id) }}" method="POST">
    {{ csrf_field() }}
    <div class="col-md-8 col-md-offset-2">
    <h1>Create Comment</h1>
            <div class="form-group">
                <textarea name="comment" id="comment" rows="4" cols="50" 
                placeholder="Comment">
            
                </textarea>
                <button type="submit">Post</button>

            </div>
        
    </div>
            

    
    </form>







    </html>
@endsection
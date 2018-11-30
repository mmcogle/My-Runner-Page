<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
    
    <ul>
    <th></th>
    <tr>
                <div class="panel-heading"><th>
                
                 Trail: {{$trail->routeName}}
</th>
                <th></th>
                </tr>
                </div>
                <div class="panel-body">
                <tr>
                <li>Distance: (in Kilometers): {{$trail->distance}}</li>
                <li> Coordinate: {{$trail->coordinate}}</li>
                <li>Scenery: {{$trail->scenery}}</li>
                <li>Difficulty(1-10): {{$trail->difficulty}}</li>
                <li>Popularity Score: {{$trail->popularity}}</li>
                <form action="{{ action('RoutesController@add', $trail->id) }}" method="POST">
                    {{ csrf_field() }}
                    
                    <th>  <button type="submit">Add to Plan</button></th>
                    <th></th>
                    <bl></bl>
                    </tr></li>
                    </form>

               
                </tr>
                </div>
                <br></br>
                <th><a href="{{ action('CommentController@create', $trail->id) }}"> Add Comment</a></th>
    <bl>
    </bl>
    <th><a href="{{ action('CommentController@delete', $trail->id) }}"> Delete Comment</a></th>
                @if(count($trail->Comments)>0)
                    @foreach ($trail->Comments as $comment)
                    <tr><center>
                             Commenter: {{$comment->name}}
                             <div class="panel panel-default">
                    
                    <th> {{$comment->text}}</th>
                    </div>
                    </center>
                    <th></th>
                    <bl></bl>
                    </tr>
                    @endforeach
                @endif

    </ul>
    
	</body>	
	</body>
	</html>
@endsection 
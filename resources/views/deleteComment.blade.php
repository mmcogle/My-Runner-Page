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

               
                </tr>
                </div>
               
                <br></br>
                @if(count($trail->Comments)>0)
                    @foreach ($trail->Comments as $comment)
                    <tr><li>
                    <form action="{{ action('CommentController@delete2', $comment->id) }}" method="POST">
                    {{ csrf_field() }}
                    <th>{{$comment->name}}</th>
                    <th> {{$comment->text}}</th>
                    
                    <th>  <button type="submit">Delete</button></th>
                    <th></th>
                    <bl></bl>
                    </tr></li>
                    </form>
                    @endforeach
                @endif
            

    </ul>
    
	</body>	
	</body>
	</html>
@endsection
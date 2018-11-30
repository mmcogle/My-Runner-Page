<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
    
    <ul>
            @foreach($route as $trail)
                <tr>
                <div class="panel-heading"><th>
                
                <a href="/Routes/{{$trail->id}}"> Trail: {{$trail->routeName}}</a>
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
                <form action="{{ action('RoutesController@add', $trail->id) }}" method="POST">
                    {{ csrf_field() }}
                    
                    <th>  <button type="submit">Add to Plan</button></th>
                    <th></th>
                    <bl></bl>
                    </tr></li>
                    </form>
                <br></br>
            @endforeach


    </ul>


	</body>	
	</body>
	</html>
@endsection
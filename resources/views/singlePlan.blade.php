<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
		<div class="panel-heading"><th>
                
         <center><h1>Activity: {{$plan->activity}} </h1></center>
</th>

    </div>
    <div class="panel-body"><tr>

			<li>Duration: (in minutes): {{$plan->duration}}</li>
            <li> Times per week: {{$plan->repeat}}</li>
            <li>Calories per session: {{$plan->calories}}</li>
    </tr>
    <form action="{{ action('PlansController@add', $plan->id) }}" method="POST">
                    {{ csrf_field() }}
                    
                    <th>  <button type="submit">Add to Plan</button></th>
                    <th></th>
                    <bl></bl>
                    </tr></li>
                    </form>
    </div>
	</body>	
	</body>
	</html>
	@endsection
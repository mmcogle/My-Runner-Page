<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
		@foreach($plans as $plan)
		<div class="panel-heading"><th>
                
        <a href="/Plans/Cardio/{{$plan->id}}"> Activity: {{$plan->activity}} </a> 
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
        @endforeach
	</body>	
	</body>
	</html>
	@endsection
<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
    <ul>
			@if(count($weights)>0)
            <li>Weight: {{$weights->weight}}</li>
            <li>Height: {{$weights->height}}</li>

            <li>Blood Type: {{$weights->bloodType}}</li>
            <li>Gender: {{$weights->gender}}</li>
			@else <a href="{{ action('FitnessController@create') }}"> Create Health Profile</a>

			@endif 
    </ul>
	<a href="{{ action('FitnessController@edit1') }}"> Edit Information</a>


	</body>	
	</body>
	</html>
	@endsection
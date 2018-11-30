<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
    <ul>
		<h1> <a href="{{ action('PlansController@cardio') }}"> Cardio</a></h1>
		<bl></bl>
		<h1><a href="{{ action('PlansController@gains') }}"> Muscle Gain</a></h1>	
    </ul>
	

	</body>	
	</body>
	</html>
	@endsection
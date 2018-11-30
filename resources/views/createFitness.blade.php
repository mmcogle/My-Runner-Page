<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
    <form action="{{ action('FitnessController@create2') }}" method="POST">
    {{ csrf_field() }}
    

            <li> Weight<input type="text" name="weight" id="weight">	</li>
            <li> Height (in meters)<input type="text" name="height" id="height">	</li>

            Blood Type<select name="bloodType">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
    <option value="O" >O</option>
    </select>
            <li>
            Gender<select name="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Prefer not to answer">Prefer Not to Answer</option>
    </select>
    </li>


    <button type="submit">Update</button>

    </form>


	</body>	
	</body>
	</html>
        @endsection
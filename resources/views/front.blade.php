<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">

	<form action="{{ route('login.store') }}" method="POST">
{{-- Error messages --}}
@if ($errors->has('name'))
<ul>
@foreach ($errors->get('name') as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

{{-- Error messages --}}
@if ($errors->has('password'))
<ul>
@foreach ($errors->get('password') as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

	Name<input value="{{ old('name')}}"
	 type="text" name="name" id="name">	
	Password<input type="password" name="password" id="password">
	<input type="hidden" name="hidden" value="value">
		
	<button type="submit">Send</button>
	{{csrf_field()}}
	</form>
	<a href="{{ action('UserController@index') }}"> Create User</a>


	</body>	
	</body>
	</html>

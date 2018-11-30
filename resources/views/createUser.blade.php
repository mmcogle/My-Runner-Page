<!DOCTYPE html>
<html>
	<head>
		<title>My Runner</title>
	</head>
	<body>
	<body style="background-color:powderblue;">

	<form action="{{ route('user.store') }}" method="POST">

	{{-- Error messages --}}
	@if ($errors->has('name'))
	<ul>
	@foreach ($errors->get('name') as $error)
	<li>{{ $error }}</li>
	@endforeach
	</ul>
	@endif

	{{-- Error messages --}}
	@if ($errors->has('email'))
	<ul>
	@foreach ($errors->get('email') as $error)
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

		{{-- Error messages --}}
	@if ($errors->has('password2'))
	<ul>
	@foreach ($errors->get('password2') as $error)
	<li>{{ $error }}</li>
	@endforeach
	</ul>
	@endif


	<li>Name <input value="{{ old('name')}}" 
	type="text" name="name" id="name"></li>
    <bl><bl>
    <li>Email <input value="{{ old('email')}}"
	 type="text" name="email" id="email"></li>
    <bl><bl>
	<li>Password <input type="password" name="password" id="password"></li>
	<input type="hidden" name="hidden" value="value">
    <bl><bl>
    <li>Repeat Password <input type="password" name="password2" id="password2"></li>
	<input type="hidden" name="hidden2" value="value2">
		
	<button type="submit">Create Account</button>
	{{csrf_field()}}

	</form>



	</body>
	</body>
	</html>

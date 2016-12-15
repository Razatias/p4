<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>{{$story[0]->title}}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
	<div class='container' align="right" >
			@if(Auth::check())
					<a class="button" href='/'>Home</a>
					<a  class="button" href='/stories/create'>Add a new story</a>
					<a  class="button" href='/logout'>Log out</a>
			@else
					<a class="button" href='/'>Home</a>
					<a class="button" href='/login'>Log in</a>
					<a class="button button-primary" href='/register'>Register</a>
			@endif
</div>

		<div class='container' align="center">
			 <h1>{{$story[0]->title}}</h1>
			 <p>{{$story[0]->firstline}}</p>
			 <p>{{$story[0]->secondline}}</p>
			 <p>{{$story[0]->thirdline}}</p>
			 <p>{{$story[0]->forthline}}</p>
			 <p>{{$story[0]->fifthline}}</p>
		</div>
    <div class='container' align="center">
			<a class="button button-primary" href='/'>Home</a>
			<a class="button button-primary" href='/stories/create'>Create a new story</a>
		</div>
</body>
</html>

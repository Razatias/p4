<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>create a new story</title>
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

<div class="container">
<h1 align="center"><b>Create a new story</b></h1>

<form method='POST'action='/stories/create' align="center">
  {{ csrf_field() }}
  <label for="title">Title</label>
  <input name="title" type="text"  id="title" size="20">
	<br>
  <label for="firstLine">First line</label>
  <input name="firstLine" type="text"  id="firstLine" size="100">.
  <br>
	<label for="secondLineFirstWord">Begining of second line</label>
	<input name="secondLineFirstWord" type="text"  id="secondLineFirstWord" size="15">
	<br>
	<input type="submit" value="Create a new story">
</form>

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<?php echo $message ?>

</div>
</body>
</html>

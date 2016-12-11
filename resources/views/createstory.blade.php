<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>create a new story</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
<div class="container">
      <a href='/'>back</a>

<h1>create a new story</h1>

<form method='POST'action='/stories/create'>
  {{ csrf_field() }}
  <label for="title">Title</label>
  <input name="title" type="text"  id="title" size="20">
	<br>
  <label for="firstLine">First line</label>
  <input name="firstLine" type="text"  id="firstLine" size="100">.
  <br>
	<label for="secondLineFirstWord">Second line first word (users will only see this word until the story is finished)</label>
	<input name="secondLineFirstWord" type="text"  id="secondLineFirstWord" size="5">...
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

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
  <label for="storyTitle">Title</label>
  <input name="storyTitle" type="text"  id="storyTitle">
	<br>
  <label for="story1stLine">First line</label>
  <input name="story1stLine" type="text"  id="story1stLine">
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

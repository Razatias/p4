<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Help finish a story</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
<div class="container">
      <a href='/'>back</a>

<h1>Help finish a story</h1>

  <?php
      //loop displaying titles
      echo '<form method="POST" action="/stories/edit">
      <label for="">add a sentence</label>
      <input name="" type="text"  id="" size="100">
      <label for="secondLineFirstWord">Second line first word (users will only see this word until the story is finished)</label>
    	<input name="secondLineFirstWord" type="text"  id="secondLineFirstWord" size="5">...
      <input type="submit" value="Create a new story">
      </form>'
  ?>

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</div>
</body>
</html>

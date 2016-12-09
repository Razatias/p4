<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>{{$story[0]->title}}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
		<div class='container'>
				<h1>{{$story[0]->title}}</h1>
			 <p>{{$story[0]->firstline}}</p>
			 <p>{{$story[0]->secondline}}</p>
			 <p>{{$story[0]->thirdline}}</p>
			 <p>{{$story[0]->forthline}}</p>
			 <p>{{$story[0]->fifthline}}</p>
		</div>
</body>
</html>

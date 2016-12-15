<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Social Stories</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
	<link rel="stylesheet" type="text/css" href="http:/css/stories.css">
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

		<div class='container'>
				<br>
				<h1 align="center"><b>Welcome to Social Stories</b></h1>

				<p align="center">Hi welcome to the app for creating short nonsense stories by multiple people. Just like when we were kids.</br>
				Every user can write a sentence without seeing the whole story, once finished the full story is revealed</br>
				<img src="http://00.edu-cdn.com/files/59901_60000/59907/folded-paper-star-garland.jpg" align="center"></p>
				<h2 align="center">How does it work?</h2>
		</div>

				<div class='container'>
						<div class="six columns">
									<p align="center"><b>Start you own story</b> by chosing a title, the first sentence and the
									begining of the second sentence</br></br>
									<a class="button button-primary" href='/stories/create' align="center">create a new story</a></p>


						</div>
						<div class="six columns">
								<p align="center"><b>Finish a sentence</b> in a story created by another user.
									Then write the begining of the next sentence for other users to continue</br></br>
								<a class="button button-primary" href='/stories/edit' align="center">Join a story</a></p>
						</div>
					</div>

				<p align="center">**Each story has 5 sentence before it is complete.</p></br>


				<h2 align="center">Recent finished stories</h2>
				<?php
								use App\Story;
								use App\User;

								$stories = Story::all();

								if(!$stories->isEmpty()) {

										# Output stories
										$allStories="";
										foreach($stories as $story) {
											$user = DB::table('users')->where('id', $story->author_id)->get();
											$allStories.= '<div class="stories container"><div align="center">Started by: <b>'.$user[0]->name.'</b></div>
											<a class="storytitle" href=/stories/'.$story->story_id.'>'.$story->title.
											'</a></div></br>';
										}
										echo $allStories;
								}
								else {
										echo 'No stories to display';
								}
				 ?>

		</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Social Stories</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
			<div class='container' align="right" >
					@if(Auth::check())
							<a class="button" href='/'>Home</a>
							<a  class="button" href='/stories/create'>Add a new story</a>
							<a  class="button" href='/stories/create'>My stories</a>
							<a  class="button" href='/logout'>Log out</a>
					@else
							<a class="button" href='/'>Home</a>
							<a class="button" href='/login'>Log in</a>
							<a class="button button-primary" href='/register'>Register</a>
					@endif
		</div>

		<div class='container'>
				<br>
				<h1 align="center">Welcome to Social Stories</h1>
				<h2 align="center">How does it work?</h2>
				<br>

				<p>An app for creating short nonsense stories by multiple people.
          Each user writes a few sentences starting with a line of text written by another user,
          without seeing the whole story.  After everyone is finished, the full story is revealed.
          The app is an attempt to recreate an old children’s game where a paper is being passed with
           each participat writing a sentence and folding the paper, so no one can see what’s being written
          before the story is complete.</p>
          <br>
					<div align="center">
		          <a class="button button-primary" href='/stories/create'>create a new story</a>
		          <a class="button button-primary" href='/stories/edit'>Join someone else's story</a>
					</div>
          <br>

				<h2 align="center">Recent stories</h2>
				<?php
								use App\Story;

								$stories = Story::all();

								if(!$stories->isEmpty()) {

										# Output stories
										$allStories="";
										foreach($stories as $story) {
												$allStories.= "<p><a href=/stories/". $story->story_id .">" . $story->title . "</p>";
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

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Help finish a story</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  	<link rel="stylesheet" type="text/css" href="http:/css/stories.css">

</head>
<body>
<div class="container">
      <a href='/'>back</a>

<h1>Help finish a story</h1>

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


  <?php

      use App\UnfinishedStory;

      $ufstories = UnfinishedStory::all();

      if(!$ufstories->isEmpty()) {

          # Output stories
          $allufStories="";
          foreach($ufstories as $ufstory) {
              $allufStories.= '<div class="stories"><p><div class="storytitle">'.$ufstory->uftitle.'</div></p>';
                      if ($ufstory->counter==2){
                              $allufStories.=
                              '<form method="POST" action="/stories/edit">'.csrf_field().
                              '<div>Complete the sentence</div>'.
                              '<p>'.$ufstory->ufsecondlinefirstword.
                              '<input name="ufsecondline" type="text"  id="ufsecondline" size="50">'.
                              '</p><p>'.
                              '<label for="ufthirdlinefirstword">Write the begining of the next sentence</label>'.
                              '<p><input name="ufthirdlinefirstword" type="text"  id="ufthirdlinefirstword" size="5"></p>'
                              .'<input type="hidden" value='.$ufstory->ufstory_id.' name="ufstory_id"/>'.
                              '<input type="hidden" value='.$ufstory->counter.' name="counter"/>'.
                              '<input class="button button-primary" type="submit" value="Submit"></form>
                              </div></br>';
                      } else if ($ufstory->counter==3){
                                $allufStories.=
                                '<form method="POST" action="/stories/edit">'.csrf_field().
                                '<div>Complete the sentence</div>'.
                                '<p>'.$ufstory->ufthirdlinefirstword.
                                '<input name="ufthirdline" type="text"  id="ufthirdline" size="50">'.
                                '</p><p>'.
                                '<label for="ufforthlinefirstword">Write the begining of the next sentence</label>'.
                                '<p><input name="ufforthlinefirstword" type="text"  id="ufforthlinefirstword" size="5"></p>'
                                .'<input type="hidden" value='.$ufstory->ufstory_id.' name="ufstory_id"/>'.
                                '<input type="hidden" value='.$ufstory->counter.' name="counter"/>'.
                                '<input class="button button-primary" type="submit" value="Submit"></form>
                                </div></br>';
                      } else if ($ufstory->counter==4){
                              $allufStories.=
                              '<form method="POST" action="/stories/edit">'.csrf_field().
                              '<div>Complete the sentence</div>'.
                              '<p>'.$ufstory->ufforthlinefirstword.
                              '<input name="ufforthline" type="text"  id="ufforthline" size="50">'.
                              '</p><p>'.
                              '<label for="uffifthlinefirstword">Write the begining of the next sentence</label>'.
                              '<p><input name="uffifthlinefirstword" type="text"  id="uffifthlinefirstword" size="5"></p>'
                              .'<input type="hidden" value='.$ufstory->ufstory_id.' name="ufstory_id"/>'.
                              '<input type="hidden" value='.$ufstory->counter.' name="counter"/>'.
                              '<input class="button button-primary" type="submit" value="Submit"></form>
                              </div></br>';
                      } else if ($ufstory->counter==5){
                        $allufStories.=
                              '<form method="POST" action="/stories/edit">'.csrf_field().
                              '<div>Complete the sentence</div>'.
                              '<p>'.$ufstory->uffifthlinefirstword.
                              '<input name="uffifthline" type="text"  id="uffifthline" size="50">'.
                              '</p>THE END!<p>'
                              .'<input type="hidden" value='.$ufstory->ufstory_id.' name="ufstory_id"/>'.
                              '<input type="hidden" value='.$ufstory->counter.' name="counter"/>'.
                              '<input class="button button-primary" type="submit" value="Submit"></form></div>';
                      }

          }
          echo $allufStories;
      }
      else {
          echo 'No stories to display';
      }
  ?>

</div>
</body>
</html>

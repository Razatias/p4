<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\UnfinishedStory;
use Illuminate\Support\Facades\Auth;


class StoryController extends Controller
{

  public function addStoryForm(Request $request)
  {
      return view('createstory')->with('message', '');
   }



  public function addStory(Request $request)
  {
      #validate the request
      $this->validate($request, [
        'title' => 'required|string|max:255',
        'firstLine' => 'required|string|max:255',
        'secondLineFirstWord' => 'required|string|max:20'
      ]);

        $id = Auth::id();

        # Instantiate a new Unfinished Model object
        $story = new UnfinishedStory();

        $story->uftitle = $request->input('title');
        $story->counter = 2;
        $story->ufauthor_id = $id;
        $story->uffirstline = $request->input('firstLine');
        $story->ufsecondlinefirstword = $request->input('secondLineFirstWord');

        # Invoke the Eloquent save() method
        # This will generate a new row in the `unfinished_stories` table, with the above data
        $story->save();


      $message =
      "<p>Story added!<p>
      <br>
      <a class='button button-primary' href='/'>Home</a>
      <a class='button button-primary' href='/stories/user'>My stories</a>
      <a class='button button-primary' href='/stories/edit'>Join someone else's story</a>
      <br>";

      #display message
      return view('createstory')->with('message', $message);
   }

   public function showStory($id)
   {
     $story = DB::table('stories')->where('story_id', '=', $id)->get();

      return view('showstory')->with('story', $story);

    }

    public function editStory()
    {
        return view('editstories');
     }



}

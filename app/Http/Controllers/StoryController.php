<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\UnfinishedStory;
use App\Story;
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

     public function addUfStory(Request $request)
     {

       # add second line to the database
       if ($request->input('counter')==2) {
             $this->validate($request, [
               'ufsecondline' => 'required|string|max:255',
               'ufthirdlinefirstword' => 'required|string|max:255'
               ]);

             DB::table('unfinished_stories')
                ->where('ufstory_id', $request->input('ufstory_id'))
                ->update(['counter' => 3,'ufsecondline' => $request->input('ufsecondline'),'ufthirdlinefirstword' => $request->input('ufthirdlinefirstword')]);

             return view('editstories');
           }

           # add third line to the database
           if ($request->input('counter')==3) {
                 $this->validate($request, [
                   'ufthirdline' => 'required|string|max:255',
                   'ufforthlinefirstword' => 'required|string|max:255'
                   ]);

                 DB::table('unfinished_stories')
                    ->where('ufstory_id', $request->input('ufstory_id'))
                    ->update(['counter' => 4,'ufthirdline' => $request->input('ufthirdline'),'ufforthlinefirstword' => $request->input('ufforthlinefirstword')]);

                 return view('editstories');
               }

               # add forth line to the database
               if ($request->input('counter')==4) {
                     $this->validate($request, [
                       'ufforthline' => 'required|string|max:255',
                       'uffifthlinefirstword' => 'required|string|max:255'
                       ]);

                     DB::table('unfinished_stories')
                        ->where('ufstory_id', $request->input('ufstory_id'))
                        ->update(['counter' => 5,'ufforthline' => $request->input('ufforthline'),'uffifthlinefirstword' => $request->input('uffifthlinefirstword')]);

                     return view('editstories');
                   }

                   # add unfinished story to finished story database, delete entry in unfinished stories database
                   if ($request->input('counter')==5) {
                         $this->validate($request, [
                           'uffifthline' => 'required|string|max:255'
                           ]);

                         DB::table('unfinished_stories')
                            ->where('ufstory_id', $request->input('ufstory_id'))
                            ->update(['uffifthline' => $request->input('uffifthline')]);


                        # add story to finished storied database
                        $finishedStory = DB::table('unfinished_stories')
                              ->where('ufstory_id', $request->input('ufstory_id'))->get();
          
                        $newstory = new Story();
                        $newstory->title = $finishedStory[0]->uftitle;
                        $newstory->author_id = $finishedStory[0]->ufauthor_id;
                        $newstory->firstline = $finishedStory[0]->uffirstline;
                        $newstory->secondline = $finishedStory[0]->ufsecondlinefirstword." ".$finishedStory[0]->ufsecondline;
                        $newstory->thirdline = $finishedStory[0]->ufthirdlinefirstword." ".$finishedStory[0]->ufthirdline;
                        $newstory->forthline = $finishedStory[0]->ufforthlinefirstword." ".$finishedStory[0]->ufforthline;
                        $newstory->fifthline = $finishedStory[0]->uffifthlinefirstword." ".$finishedStory[0]->uffifthline;
                        $newstory->save();

                        # delete story from unfinished stories
                        DB::table('unfinished_stories')->where('ufstory_id', $request->input('ufstory_id'))->delete();

                         return view('editstories');
                       }



      }
}

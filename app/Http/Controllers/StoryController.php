<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class StoryController extends Controller
{
  public function addStory(Request $request)
  {
      #validate the request
      $this->validate($request, [
        'storyTitle' => 'required',
        'story1stLine' => 'required'
      ]);

      $message =
      "<p>Story added!<p>
      <br>
      <a class='button button-primary' href='/'>Home</a>
      <a class='button button-primary' href='/stories'>see all stories</a>
      <br>";

      #display message
      return view('createstory')->with('message', $message);
   }

}
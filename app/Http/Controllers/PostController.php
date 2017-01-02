<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
  public function  postCreatePost(Request $request)
  {
      //Validation
      $this->validate($request, [
          'body' => 'required|max:1000'
      ]);
      $post = new Post();
      $post->body = $request['body'];
      //Access the user via request and success msg
      $message = 'There was an error';
      if ($request->user()->posts()->save($post)){
          $message = 'Post successfully created';
      }
      return redirect()->route('dashboard')->with(['message'=>$message]);

  }
}

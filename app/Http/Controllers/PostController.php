<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function  getDashboard()
    {
        //Fetch
        $posts = Post::all();

        return view('dashboard', compact('posts'));
    }
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

  public function  getDeletePost($post_id){
      //$post =Post::find($post_id)->first();
      $post =Post::where('id', $post_id)->first();
      $post->delete();
      return redirect()->route('dashboard')->with(['message' => 'Successfuly deleted!']);

  }
}

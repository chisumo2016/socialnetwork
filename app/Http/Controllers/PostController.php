<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function  getDashboard()
    {
        //Fetch
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();

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
      if(Auth::user() != $post->user){
          return redirect()->back();
      }
      $post->delete();
      return redirect()->route('dashboard')->with(['message' => 'Successfuly deleted!']);

  }
  public function postEditPost(Request $request)
  {
      //Validate
      $this->valiadate($request,[
          'body' => 'required'
      ]);

      $post = Post ::find($request['postId']);
      if(Auth::user() != $post->user){
          return redirect()->back();
      }
      $post->body = $request['body'];
      $post->update();
      return response()->json(['new_body'=>$post->body], 200);

  }
}

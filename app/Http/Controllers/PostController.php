<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function add_post(){
    	return view('add-post');
    }

    public function createPost(Request $request)
    {
       $post = new Post();
       $post->title = $request->title;
       $post->body = $request->body;
       $post->save();
       return back()->with("message","Created Successfully");

    }

    public function getPost()
    {
      $posts = Post::orderBy('id','DESC')->get();
      return view('posts',compact('posts'));
    }

    public function getPostbyId($id)
    {
      $post = Post::where('id',$id)->first();
      return view('post_details',compact('post'));
    }
    public function deletePostbyId($id)
    {
      Post::where('id',$id)->delete();
      return back()->with('message','Post Deleted Successfully');
    }
    public function editPostbyId($id)
    {
      $post = Post::find($id);
      return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request)
    {
      $post = Post::find($request->id);
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return back()->with('message','Post Updated Successfully!');


    }

}

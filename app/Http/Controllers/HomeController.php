<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.user')->paginate(10);
        return view('home', ['posts' => $posts]);
    }

    public function getPostForm() {
        return view('post/post_form');
    }

     public function createPost(Request $request){
        $post = Post::create(array(
            'problem' => Input::get('problem'),
            'description' => Input::get('description'),
            'user' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Query has been successfully added!');
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('post/post_detail', ['post' => $post]);
    }

     public function editPost($id) {
        $post = Post::find($id);
        return view('post/edit_post', ['post' => $post]);
    }

    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        $post->problem = $request->problem;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home')->with('success', 'Query has been updated successfully!');
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Query has been deleted successfully!');
    }


}

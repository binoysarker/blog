<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('posts.index',compact('posts'));
    }
    public function create()
    {
    	return view('posts.create');
    }
    public function store(Post $post)
    {
    	$this->validate(request(),[
    		'title'	=>	'required|max:10',
    		'body'	=>	'required',
    		]);
    	$post->create(request(['title','body']));
    	return redirect()->home();
    }
    public function show(Post $post)
    {
    	return view('posts.show',compact('post'));
    }
}

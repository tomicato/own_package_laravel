<?php

namespace Tomicato\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Tomicato\Posts\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //Post::create(['title' => 'Post #3']);
        $posts = Post::all();
        return view('posts::index', ['posts' => $posts]);
    }
}

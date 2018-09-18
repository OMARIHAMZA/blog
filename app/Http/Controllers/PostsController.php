<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        //Create a new post using the request data

        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');


        //Save the post into the database

        $post->save();

        //Redirect the user to somewhere else
        return redirect('/posts');
    }
}

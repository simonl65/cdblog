<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * GET /posts
     */
    public function index()
    {
        // Render any existing blog posts:
        $posts = Post::latest()->get();
        return view('index', compact('posts'));
    }

    /**
     * GET /posts/id
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * GET /posts/create
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * POST /posts
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:10|max:65534'
        ]);

        // Save post to database:
        Post::create( request( ['title', 'body'] ) );

        // Redirect to the home page:
        return redirect('/posts');
    }
}

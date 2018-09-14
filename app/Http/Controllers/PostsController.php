<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Protect all routes except index and show:
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * GET /posts
     */
    public function index()
    {
        // Render any existing blog posts:
        // $posts = Post::latest()->get();

        // Render relevant blog posts (according to querystring if present):
        // (NOTE: "filter" is a scoped query we created in Post.php model)
        $posts = Post::latest()
                ->filter( request(['month', 'year']) )
                ->get();

        // Get the Archives data:
        $archives = Post::archives();

        return view('index', compact('posts', 'archives'));
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
            'body'  => 'required|min:10|max:65534'
        ]);

        // Save post to database:
        Post::create([
            'title'   => request('title'),
            'body'    => request('body'),
            'user_id' => auth()->id()
        ]);

        // Redirect to the home page:
        return redirect('/posts');
    }
}

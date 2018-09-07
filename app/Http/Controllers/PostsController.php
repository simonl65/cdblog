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
        return view('index');
    }

    /**
     * GET /posts/id
     */
    public function show()
    {
        return view('posts.show');
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
        // Create a new blog post using the request data:
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');

        // Save post to database:
        $post->save();

        // The following achieves the same, but we need to watch for mass-submit
        // issue which requires us to specify (in Post.php model) which fields are
        // OK to submit (using: protected $fillable = ['title', 'body'];)
        //
        // Post::create( request[ 'title', 'body' ] );

        // Redirect to the home page:
        return redirect('/posts');
    }
}

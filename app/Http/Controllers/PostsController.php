<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
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
    public function index(Posts $posts)
    {
        // dd($posts);
        // Render relevant filtered blog posts (according to querystring):
        // (NOTE: "filter" is a scoped query we created in Post.php model)
        $posts = Post::latest()
                ->filter( request(['month', 'year']) )
                ->get();
        // $posts = $posts->all();

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

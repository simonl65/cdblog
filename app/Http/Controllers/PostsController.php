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
        $posts = Post::latest();

        if( $month = request('month') ) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if( $year = request('year') ) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();


        // Get the Archives data:
        $archives = Post::selectRaw
        (
            'year(created_at) as year,
            monthname(created_at) as month,
            count(*) as published'
        )
        ->groupBy( 'year', 'month' )
        ->orderByRaw( 'min(created_at) desc' )
        ->get()
        ->toArray();

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

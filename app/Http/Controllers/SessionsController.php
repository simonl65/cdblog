<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * /login should only be available if you're NOT already logged-in:
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }


    /**
     * Show login page:
     */
    public function create()
    {
        return view('sessions.create');
    }


    /**
     * Login:
     */
    public function store()
    {
        // Attempt to authenticate user:
        if(! auth()->attempt( request(['email', 'password']))){
            return back()
                    ->withInput(
                        request()->except('password')
                    )
                    ->withErrors(['message' => 'Please check your credentials and try again.']);
        }

        // Redirect to blogs page:
        return redirect('/posts');
    }


    /**
     * Logout:
     */
    public function destroy()
    {
        auth()->logout();
        return redirect('/posts');
    }
}

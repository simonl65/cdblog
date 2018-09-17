<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    /**
     * /register should only be available if you're NOT already logged-in:
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Show the registration form:
     */
    public function create()
    {
        return view('registration.create');
    }


    /**
     * Validate and save user registration to database:
     */
    public function store()
    {
        // Validate:
        $this->validate(request(), [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'  => 'required|confirmed|min:8|max:255'
        ]);

        // Save to database:
        $user = User::create([
            'name'  => request('name'),
            'email' => request('email'),
            'password'  => \Hash::make( request('password'))
        ]);

        // Sign user in:
        // \Auth::login(); // A facade.
        auth()->login( $user );

        // Send welcome email:
        \Mail::to($user)->send(new Welcome($user));

        // Redirect:
        // return redirect()->home();
        return redirect('/posts');
    }
}

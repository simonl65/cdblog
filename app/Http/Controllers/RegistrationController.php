<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationForm;

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
    public function store(RegistrationForm $form)
    {
        // Save user details to database, log the user in, then email them:
        $form->persist();

        session()->flash('message', 'Thanks for the sign-up!');

        // Redirect:
        // return redirect()->home();
        return redirect('/posts');
    }
}

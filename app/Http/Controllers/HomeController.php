<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Simon";
        $age = 21;
        return view('welcome', compact('name', 'age'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Add this method
    public function index()
    {
        return view('home'); // points to resources/views/home.blade.php
    }
}

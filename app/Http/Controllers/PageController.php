<?php

// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }   

    public function contact()
    {
        return view('layouts.contact');
    }
}

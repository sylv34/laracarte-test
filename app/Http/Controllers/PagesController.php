<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('Pages.home');
    }

    public function about()
    {
    	return view('Pages.about');
    }
}

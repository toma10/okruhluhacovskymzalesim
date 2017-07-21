<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function proposition()
    {
        return view('pages.proposition');
    }

    public function routes()
    {
        return view('pages.routes');
    }

    public function results()
    {
        return view('pages.results');
    }
}

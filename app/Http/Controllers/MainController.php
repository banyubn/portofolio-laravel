<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //View
    public function home()
    {
        return view('home');
    }

    public function aboutMe()
    {
        return view('about-me');
    }

    public function programming()
    {
        return view('programming');
    }

    public function musicProducing()
    {
        return view('music-production');
    }

    public function contact()
    {
        return view('contact');
    }
}

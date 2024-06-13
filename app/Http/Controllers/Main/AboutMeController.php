<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMeController extends Controller
{
    public function index()
    {
        return view('about-me');
    }
}

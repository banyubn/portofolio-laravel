<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    public function index()
    {
        return view('music-production');
    }
}

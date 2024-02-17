<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hobbies extends Controller
{
    public function index()
    {
        return view('about', [
            'aboutData' => 'Playing FPS Games,Watching movies '
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JgimController extends Controller
{
    public function index()
    {
        return view('jgim');
    }

    public function gotoslide()
    {
        return view('maps-jgim');
    }
}

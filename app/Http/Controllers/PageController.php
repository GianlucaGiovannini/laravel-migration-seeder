<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $packs = Pack::all(); 
        dd($packs);
        return view('home');
    }
}

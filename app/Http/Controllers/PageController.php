<?php

namespace App\Http\Controllers;
use App\Model\Pack;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $packs = Pack::all(); 
        //dd($packs);
        return view('home', compact('packs'));
    }
}

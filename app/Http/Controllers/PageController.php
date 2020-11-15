<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        return view('Pages/login');
    }

    public function dashboard(){
        return view('Pages/home');
    }
}
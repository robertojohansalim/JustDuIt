<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('Pages/home');
    }

    public function login()
    {
        return view('Pages/login');
    }
    
    public function register(){
        return view('Pages/register');
    }

    public function product($id){
        return view("Pages/product");
    }
}
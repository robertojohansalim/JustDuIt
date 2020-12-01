<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard(){
        return view('Pages/home');
    }

    public function login(Request $request)
    {
        if($request->isMethod("POST")){
            if(LoginController::authenticate($request)){
                return redirect()->intended(url()->route('dashboard'));
            }
            return back()->withInput()->withErrors(['msg'=>'login fail, check your email or password']);
        }
        return view('Pages/login');
    }

    public function register(Request $request){
        if($request->isMethod("POST")){
            // Validating Input
            $errors = RegisterController::register($request);
            if(!$errors){
                // Accepted
                return redirect()->route('dashboard');
            }
            else{
                redirect()->route('register')->withInput()->withErrors($errors);
            }
        }
        return view('Pages/register');
    }

    public function product($id){
        return view("Pages/product");
    }

    public function addToCart($id){
        return view("Pages/addToCart");
    }

    public function cart(){
        return view('Pages/cart');
    }

    public function transaction(){
        return view('Pages/transaction');
    }

    public function test(Request $request){
        if($request->isMethod("POST")){
            // cook
        }
        // return view('test');
        return response()->view('test')->withCookie(cookie('username', 'hello',5));
    }
}
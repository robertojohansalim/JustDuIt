<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('Pages/home');
    }

    public function login(Request $request)
    {
        if($request->isMethod("POST")){
            if(LoginController::authenticate($request)){
                return redirect()->intended('dashboard');
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
                back()->withInput()->withErrors($errors);
            }
        }
        return view('Pages/register');
    }

    public function product($id){
        return view("Pages/product");
    }


}
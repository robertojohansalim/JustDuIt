<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login(Request $request){
        $credential = $request->only('email', 'password');
        $remember = ($request->get('remember') != null) ? true : false;
        if($remember){
            // Save Email & Password
            Cookie::queue('email', $credential['email'], 120);
            Cookie::queue('password', $credential['password'], 120);
        }
        if(Auth::attempt($credential, $remember)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->withInput()->withErrors(['msg'=>'login fail, check your email or password']);
        }
    } 

    public function logout(){
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
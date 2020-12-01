<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    // Handle Authentication Attept
    public static function authenticate(Request $request){
        $credential = $request->only('email', 'password');
        // Get remember variable
        $remember = ($request->get('remember') != null) ? true : false;
        if($remember){
            // Save Email & Password
            Cookie::queue('email', $credential['email'], 120);
            Cookie::queue('password', $credential['password'], 120);
        }
        // Log User In with remember me
        return Auth::attempt($credential, $remember);
    }

    public static function logout(){
        // Auth::login
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
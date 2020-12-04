<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    private static function makeValidator(Request $request){
        $validator = Validator::make($request->all(),[
            'username'=>'required',
            'email'=> ['required','email','unique:users,email'],
            'password'=> 'required|confirmed|min:3',
        ]);
        return $validator;
    }

    public function register(Request $request){
        // Validate
        $validator = $this->makeValidator($request);
        // dd($validator);
        if($validator->fails()){
            // Returning "Error"
            return redirect()->route('register')->withInput()->withErrors($validator);
        }

        // Store Data
        $user = User::addUser(
            $request->get('username'),
            bcrypt($request->get('password')),
            $request->get('email')
        );
        // Log User in
        Auth::login($user);
        // Route to Dashboard after Log in
        return redirect()->route('dashboard');
    }
}
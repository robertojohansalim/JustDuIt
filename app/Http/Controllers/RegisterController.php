<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    public static function validateRegister(Request $request){
        $validator = RegisterController::makeValidator($request);
        return !$validator->fails();
    }

    public static function register(Request $request){
        // Validate
        $validator = RegisterController::makeValidator($request);
        // dd($validator);
        if($validator->fails()){
            // Returning "Error"
            return $validator;
        }

        // Store Data
        return !User::addUser(
            $request->get('username'), 
            $request->get('password'), 
            $request->get('email')
        );
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private static function makeValidator(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'price'=> ['required','email','unique:users,email'],
            'description'=> 'required|confirmed|min:3',
            'image'=> 'required|image|mimes:jpeg,bmp,png',
        ]);
        return $validator;
    }

    public function add(Request $request){
        $localPath = 'product_image';
        $productName = $request->get('name');
        $productPrice = $request->get('price');
        $productDescription = $request->get('description');
        $productImage = $request->file('image');
        $proudctImageName = join("_",explode(" ",$productName)) . '.' . $productImage->extension();
        // dump($productName);
        // dump($productPrice);
        // dump($productDescription);
        // dd(join("_",explode(" ",$productName)));
        // dump(join("_",explode(" ",$productName)));
        // dump($productImage->extension());
        // dd($productImage);
        $productImage->storeAs($localPath, $proudctImageName);

        

        dd($request);
        die();

    }
}
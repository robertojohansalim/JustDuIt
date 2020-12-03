<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private static function makeValidator(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'price'=> 'required|integer|min:100',
            'description'=> 'required',
            'image'=> 'required|image|mimes:jpeg,bmp,png',
        ]);
        return $validator;
    }

    public function add(Request $request){
        $validator = ProductController::makeValidator($request);
        if($validator->fails()){
            // redirect back to addProduct Page if fails
            return redirect()->route('addProduct')->withInput()->withErrors($validator);
        }
        $productName = $request->get('name');
        $productPrice = $request->get('price');
        $productDescription = $request->get('description');
        $productImage = $request->file('image');
        
        // Storing Image at Location
        $localPath = 'product_image/';
        $proudctImageName = join("_",explode(" ",$productName)) . '.' . $productImage->extension();
        $productImage->storeAs($localPath, $proudctImageName);

        // Image Add 
        $shoe = Shoe::addShoe($productName, $productDescription, $productPrice, $proudctImageName);

        // Redirect to Dashboard if Succeed
        return redirect()->route('dashboard');
    }
}
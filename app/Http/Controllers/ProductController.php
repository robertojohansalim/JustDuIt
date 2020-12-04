<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    private function makeRules(){
        return [
            'name'=>'required',
            'price'=> 'required|integer|min:100',
            'description'=> 'required',
            'image'=> 'required|image|mimes:jpeg,bmp,png',
        ];
    }

    private function makeValidator(Request $request, $rules = null){
        if(!$rules){
            $rules = $this->makeRules();
        }
        $validator = Validator::make($request->all(),$rules);
        return $validator;
    }

    private function storeImage($image, $store_path = 'product_image/'){
        // dump(now()->toDateTimeLocalString());
        $image_name = uniqid() .'_'. date('dmy_His') .'.'. $image->extension();
        // dd($image_name);
        $image->storeAs($store_path, $image_name);
        return $image_name;
    }

    // Public Static Method
    public static function searchQuery($query, $paginate = 6){
        $shoes = Shoe::where('name', 'like', "%" . $query . "%")->paginate($paginate);
        return $shoes;
    }

    // Post Request Handler
    public function add(Request $request){
        // $validator = ProductController::makeValidator($request);
        $validator = $this->makeValidator($request);
        if($validator->fails()){
            // redirect back to addProduct Page if fails
            return redirect()->route('addProduct')->withInput()->withErrors($validator);
        }
        $productName = $request->get('name');
        $productPrice = $request->get('price');
        $productDescription = $request->get('description');
        $productImage = $request->file('image');

        // Storing Image at Location
        // $path = $this->storeImage($productImage);
        $proudctImageName = $this->storeImage($productImage);

        // Image Add
        $shoe = Shoe::addShoe($productName, $productDescription, $productPrice, $proudctImageName);

        // Redirect to Dashboard if Succeed
        return redirect()->route('dashboard');
    }

    public function update(Request $request){
        $rules = $this->makeRules();
        // Change Rules to allow null Image
        $rules['image'] = 'image|mimes:jpeg,bmp,png';
        $validator = $this->makeValidator($request, $rules);
        if($validator->fails()){
            // redirect back to addProduct Page if fails
            return redirect()->route('updateProduct', ['id'=>$request->id])->withInput()->withErrors($validator);
        }
        // dump($request->all());
        $productId = $request->get('product_id');
        $productName = $request->get('name');
        $productPrice = $request->get('price');
        $productDescription = $request->get('description');
        $productImage = $request->file('image');
        $proudctImageName = $request->get('product_image_name');

        // Storing Image at Location
        if($productImage != null){
            $proudctImageName = $this->storeImage($productImage);
        }

        // Image Update
        Shoe::editShoe($productId, $productName, $productDescription, $productPrice, $proudctImageName);

        // Redirect to Dashboard if Succeed
        return redirect()->route('dashboard');
    }

}
<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Shoe;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard(){
        $allShoe = Shoe::all();
        $data = [
            "allShoe" => $allShoe
        ];
        return view('Pages/home', $data);
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
        $shoe = Shoe::find($id);
        if(!$shoe){
            return abort(404);
        }
        $data = [
            'shoe'=>$shoe
        ];
        return view("Pages/product", $data);
    }

    public function addToCart($id){
        $shoe = Shoe::find($id);
        if(!$shoe){
            return abort(404);
        }
        $data = [
            'shoe'=>$shoe
        ];
        return view("Pages/addToCart", $data);
    }

    public function updateCart($id){
        $item = CartItem::find($id);
        if(!$item){
            return abort(404);
        }
        $data = [
            'cart_id' => $id,
            'item' => $item->shoe,
            'quantity' => $item->quantity
        ];
        return view("Pages/updateCart", $data);
    }

    public function updateProduct($id){
        $shoe = Shoe::find($id);
        if(!$shoe){
            return abort(404);
        }
        $data = [
            'shoe'=>$shoe
        ];
        return view("Pages/updateProduct", $data);
    }

    public function cart(){
        $cart = Auth()->user()->cart;
        $data = [
            'cart' => $cart,
            'cart_items' => $cart->items,
        ];
        return view('Pages/cart', $data);
    }

    public function transaction(){
        return view('Pages/transaction');
    }

    public function addProduct(){
        return view('Pages/addProduct');
    }

    public function test(Request $request){
        if($request->isMethod("POST")){
            // cook
        }
        // CartController::insertIntoCart(1, 10);
        return view('test');
    }
}

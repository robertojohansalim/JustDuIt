<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public static function getCart($user_id = null){
    //     $user = null;
    //     if(!$user_id){
    //         $user = Auth::user();
    //     }
    //     else{
    //         $user = User::find($user_id);
    //     }
    //     return $user->cart;
    // }

    // public static function getCartItems($user_id = null){
    //     $user = null;
    //     if(!$user_id){
    //         $user = Auth::user();
    //     }
    //     else{
    //         $user = User::find($user_id);
    //     }
    //     if($user->cart){
    //         return $user->cart->items;
    //     }
    //     return null;
    // }

    // public static function makeCart($user_id = null){
    //     return Cart::makeCart($user_id ? $user_id : Auth::user()->id);
    // }

    public static function updateOrinsertIntoCart($product_id, $quantity, $user_id = null){
        $user = null;
        if(!$user_id){
            $user = Auth::user();
        }
        else if($user_id != null){
            $user = User::find($user_id);
        }
        else{
            return null;
        }
        $cart = $user->cart;
        if($cart == null){
            $cart = Cart::makeCart($user->id);
        }
        $cart_id = $cart->id;
        return CartItem::updateOrCreateItem($product_id, $quantity, $cart_id);
    }

    // Post Request Handler
    public function addItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $product_id = $request->get('product_id');
        $quantity = $request->get('quantity');
        CartController::updateOrinsertIntoCart($product_id,$quantity, $user->id);
        return redirect()->route('cart');
    }

    public function removeItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $cart_id = $request->get('cart_id');
        CartItem::removeItem($cart_id);

        return redirect()->route('cart');
    }

    public function editItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $product_id = $request->get('product_id');
        $quantity = $request->get('quantity');
        CartController::updateOrinsertIntoCart($product_id,$quantity, $user->id);
        return redirect()->route('cart');
    }

    public function updateItem(Request $request){
        dd($request);
    }
}
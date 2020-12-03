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

    public static function createItem($product_id, $quantity, $user_id = null){
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
        return CartItem::createItem($product_id, $quantity, $cart_id);
    }

    public static function clearCart($cart_id){
        $cart = Cart::find($cart_id);
        $items = $cart->items;
        foreach($items as $item){
            CartItem::removeItem($item->id);
        }
        return true;
    }

    // Post Request Handler
    public function addItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $product_id = $request->get('product_id');
        $quantity = $request->get('quantity');
        CartController::createItem($product_id,$quantity, $user->id);
        return redirect()->route('cart');
    }

    public function removeItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $cart_item_id = $request->get('cart_item_id');
        CartItem::removeItem($cart_item_id);

        return redirect()->route('cart');
    }

    public function updateItem(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login');
        }
        $cart_item_id = $request->get('cart_item_id');
        $quantity = $request->get('quantity');
        // CartController::updateOrinsertIntoCart($product_id,$quantity, $user->id);
        CartItem::editItem($cart_item_id, $quantity);
        return redirect()->route('cart');
    }

    public function checkout(Request $request){
        $cart = Auth::user()->cart;
        
    }
}
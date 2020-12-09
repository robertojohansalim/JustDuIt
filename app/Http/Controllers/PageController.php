<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Shoe;
use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        $query = $request->get('qs');

        // $allShoe = Shoe::all();
        $allShoe = ProductController::searchQuery($query);
        $data = [
            "allShoe" => $allShoe
        ];
        return view('Pages/home', $data);
    }

    public function login()
    {
        return view('Pages/login');
    }

    public function register()
    {
        return view('Pages/register');
    }

    public function product($id)
    {
        $shoe = Shoe::find($id);
        if (!$shoe) {
            return abort(404);
        }
        $data = [
            'shoe' => $shoe
        ];
        return view("Pages/product", $data);
    }

    public function addToCart($id)
    {
        $shoe = Shoe::find($id);
        if (!$shoe) {
            return abort(404);
        }
        $data = [
            'shoe' => $shoe
        ];
        return view("Pages/addToCart", $data);
    }

    public function updateCart($id)
    {
        $item = CartItem::find($id);
        if (!$item) {
            return abort(404);
        }
        $data = [
            'cart_id' => $id,
            'item' => $item->shoe,
            'quantity' => $item->quantity
        ];
        return view("Pages/updateCart", $data);
    }

    public function updateProduct($id)
    {
        $shoe = Shoe::find($id);
        if (!$shoe) {
            return abort(404);
        }
        $data = [
            'shoe' => $shoe
        ];
        return view("Pages/updateProduct", $data);
    }

    public function cart()
    {
        $cart = Auth()->user()->cart;
        if ($cart) {
            $data = [
                'cart' => $cart,
                'cart_items' => $cart->items
            ];
            return view('Pages/cart', $data);
        } else {
            $data = [
                'cart' => null,
                'cart_items' => null
            ];
            return view('Pages/cart', $data);
        }
    }

    public function transaction()
    {
        $data = [];
        $headers = [];
        if (Auth::user()->role->role_name == 'admin') {
            // $headers = TransactionHeader::all()->order;
            $headers = TransactionHeader::orderBy('date', 'DESC')->paginate(6);
        }
        if (Auth::user()->role->role_name == 'member') {
            // $headers = TransactionHeader::all()->where('id_user','=',Auth()->user()->id)->get();
            $headers = TransactionHeader::where('id_user', '=', Auth()->user()->id)->orderBy('date', 'DESC')->paginate(6);
        }
        $data = [
            'transactions' => $headers
        ];
        return view('Pages/transaction', $data);
    }

    public function addProduct()
    {
        return view('Pages/addProduct');
    }


    // For Testing Perpose
    public function test(Request $request)
    {
        if ($request->isMethod("POST")) {
            // cook
        }
        // CartController::insertIntoCart(1, 10);
        $header = TransactionHeader::makeTransactionHeader(Auth::user()->id, now());
        $detail = TransactionDetail::makeTransactionDetail($header->id, 1, 'test.jpg', 2000, 10);
        dump($header);
        dd($detail);
        $data = [
            'header' => $header
        ];
        return view('test', $data);
    }
}
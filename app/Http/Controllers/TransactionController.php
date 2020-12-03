<?php

namespace App\Http\Controllers;

use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public static function makeTransaction($cartItems){
        $user = Auth::user();
        $date = now();
        $header = TransactionHeader::makeTransactionHeader($user->id, $date);
        $header->id;
        foreach($cartItems as $item){
            TransactionDetail::makeTransactionDetail($header->id, $item->shoe->id, $item->shoe->image, $item->shoe->price, $item->quantity);
        }
        return $header;
    }
}
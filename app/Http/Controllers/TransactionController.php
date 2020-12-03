<?php

namespace App\Http\Controllers;

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
    }
}
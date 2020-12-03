<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transaction_detail';
    protected $fillable = [
        'id_shoe', 'id_transaction_header', 'image', 'price', 'quantity'
    ];
    public $timestamps = false;

    public static function makeTransactionDetail($header_id, $shoe_id, $image, $price, $quantity){
        $detail = new TransactionDetail();
        
    }
}
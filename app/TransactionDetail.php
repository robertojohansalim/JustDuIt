<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transaction_detail';
    protected $primary = ['id_transaction_header', 'id_shoe'];
    protected $fillable = [
        'id_shoe', 'id_transaction_header', 'price', 'quantity'
    ];
    public $incrementing = false;
    public $timestamps = false;

    public function header()
    {
        return $this->hasOne('App\Header', 'id_transaction_header', 'id');
    }

    public function shoe()
    {
        return $this->hasOne('App\Shoe', 'id', 'id_shoe');
    }

    public static function makeTransactionDetail($header_id, $shoe_id, $image, $price, $quantity)
    {
        $detail = new TransactionDetail();
        $detail->id_transaction_header = $header_id;
        $detail->id_shoe = $shoe_id;
        $detail->image = $image;
        $detail->price = $price;
        $detail->quantity = $quantity;
        $detail->save();
        return $detail;
    }
}

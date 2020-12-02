<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_item';

    protected $fillable = [
        'cart_id', 'shoe_id', 'quantity',
    ];

    public function cart(){
        return $this->hasOne('App\Cart', 'id', 'cart_id');
    }

    public static function addItem($product_id, $quantity, $cart_id){
        $item = new CartItem();
        $item->shoe_id = $product_id;
        $item->quantity = $quantity;
        $item->cart_id = $cart_id;
        return $item->save();
    }
}
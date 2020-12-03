<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_item';

    // protected $primaryKey = ['cart_id', 'shoe_id'];
    
    // public $incrementing = false;

    protected $fillable = [
        'cart_id', 'shoe_id', 'quantity',
    ];

    public function cart(){
        return $this->hasOne('App\Cart', 'id', 'cart_id');
    }

    public function shoe(){
        return $this->hasOne('App\Shoe','id', 'shoe_id');
    }

    public static function updateOrCreateItem($product_id, $quantity, $cart_id){
        $item = CartItem::updateOrCreate(['shoe_id'=>$product_id, 'cart_id'=>$cart_id],['quantity'=>$quantity]);
        return $item;
    }

    public static function removeItem($item_id){
        $item = CartItem::find($item_id);
        return $item->delete();
    }
}
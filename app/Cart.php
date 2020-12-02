<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{

    protected $table = 'cart';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
    ];
    
    public function user(){
        return $this->hasOne('App\User', 'id','user_id');
    }

    public function items(){
        return $this->hasMany('App\CartItem', 'cart_id');
    }

    public static function makeCart($user_id){
        $cart = new Cart();
        $cart->user_id = $user_id;
        return $cart->save();
    }
}
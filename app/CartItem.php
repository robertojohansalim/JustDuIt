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

    public static function addItem($cart, $id_role = 2){
        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->email = $email;
        $user->id_role = $id_role; 
        return $user->save();
    }
}
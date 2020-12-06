<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    protected $table = 'transaction_header';

    protected $fillable = [
        'id_user', 'date'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function details()
    {
        return $this->hasMany('App\TransactionDetail', 'id_transaction_header', 'id');
    }

    public function totalPrice()
    {
        return $this->hasMany('App\TransactionDetail', 'id_transaction_header', 'id')->selectRaw('sum(price*quantity) as value')->groupBy('id_transaction_header');
    }

    public static function makeTransactionHeader($user_id, $date)
    {
        $header = new TransactionHeader();
        $header->id_user = $user_id;
        $header->date = $date;
        $header->save();
        return $header;
    }
}

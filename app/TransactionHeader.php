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

    public static function makeTransactionHeader($user_id, $date){
        $header = new TransactionHeader();
        $header->id_user = $user_id;
        $header->date = $date;
        $header->save();
        return $header;
    }
}
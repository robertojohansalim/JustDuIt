<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    protected $table = 'transaction_header';
    protected $fillable = [
        'id_shoe', 'id_transaction_header', 'image', 'price', 'quantity'
    ];
}
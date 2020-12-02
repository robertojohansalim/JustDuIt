<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    //
    protected $table = 'Shoe';
    protected $fillable = [
        'username', 'email', 'password',
    ];
}
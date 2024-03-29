<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    //
    protected $table = 'Shoe';
    protected $fillable = [
        'name', 'description', 'image', 'price',
    ];

    public static function addShoe($name, $description, $price, $image){
        $shoe = new Shoe();
        $shoe->name = $name;
        $shoe->description = $description;
        $shoe->price = $price;
        $shoe->image = $image;
        return $shoe->save();
    }

    public static function editShoe($id, $name, $description, $price, $image = null){
        $shoe = Shoe::find($id);
        $shoe->name = $name;
        $shoe->description = $description;
        $shoe->price = $price;
        $shoe->image = $image ? $image : $shoe->image;
        $shoe->save();
        return $shoe;
    }
}
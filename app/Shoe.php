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

    public static function editShoe($shoe_id, $name, $description, $price, $image){
        $shoe = Shoe::find($shoe_id);
        $shoe->name = $name;
        $shoe->description = $description;
        $shoe->price = $price;
        $shoe->image = $image;
        $shoe->save();
        return $shoe;
    }
}

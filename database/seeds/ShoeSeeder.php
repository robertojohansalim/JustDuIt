<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoe')->insert([
            [
                "name"=>"Adidus Edge XY Shoe",
                "description"=>"Adidus Edge Series",
                "image"=>"Adidus_Edge_XY_Shoe.jpg",
                "price"=>"1300000"
            ],
            [
                "name"=>"Adidus Fullboost XD Shoe",
                "description"=>"Adidus Fullboost Series",
                "image"=>"Adidus_Fullboost_XD_Shoe.jpg",
                "price"=>"1500000"
            ],
            [
                "name"=>"Adidus Nick Jogger Shoe",
                "description"=>"Design for healthy jogging",
                "image"=>"Adidus_Nick_Jogger_Shoe.jpg",
                "price"=>"1250000"
            ],
            [
                "name"=>"Adidus QQ Racer Shoe",
                "description"=>"A nice style for shoes",
                "image"=>"Adidus_QQ_Racer_Shoe.jpg",
                "price"=>"995000"
            ],
            [
                "name"=>"Adidus Runfalcon Kids Running Shoe",
                "description"=>"Design for kids running",
                "image"=>"Adidus_Runfalcon_Kids_Running_Shoe.jpeg",
                "price"=>"1000000"
            ],
            [
                "name"=>"Adidus Super Star Shoe",
                "description"=>"Design to look alike Adidas Superstar",
                "image"=>"Adidus_Super_Star_Shoe.jpeg",
                "price"=>"1000000"
            ],
            [
                "name"=>"Niko Air Force Men Shoe",
                "description"=>"Nike but Niko for men shoes",
                "image"=>"Niko_Air_Force_Men_Shoe.jpeg",
                "price"=>"1200000"
            ],
            [
                "name"=>"Niko Air Min Women Shoe",
                "description"=>"Nike but Niko for women shoes",
                "image"=>"Niko_Air_Min_Women_Shoe.jpg",
                "price"=>"800000"
            ],
            [
                "name"=>"Niko Tanjun Women Shoe",
                "description"=>"Women shoes by Niko that take aspiration from Nike",
                "image"=>"Adidus_Runfalcon_Kids_Running_Shoe.jpeg",
                "price"=>"900000"
            ],
            [
                "name"=>"Niko Vision High Es Shoe",
                "description"=>"High trend shoes for women",
                "image"=>"Niko_Vision_High_ES_Shoe.jpg",
                "price"=>"1300000"
            ]
        ]);
    }
}

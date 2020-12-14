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
                "name"=>"Niko Mercury 6 Shoe",
                "description"=>"Niko Mercury Series",
                "image"=>"Niko_Mercury_6_Shoe.jpg",
                "price"=>"1250000"
            ],
            [
                "name"=>"Adidus Runfalcon Kids Running Shoe",
                "description"=>"Design for kids running",
                "image"=>"Adidus_Runfalcon_Kids_Running_Shoe.jpeg",
                "price"=>"1000000"
            ],
            [
                "name"=>"Niko Air Force Men Shoe",
                "description"=>"Nike but Niko for men shoes",
                "image"=>"Niko_Air_Force_Men_Shoe.jpeg",
                "price"=>"1200000"
            ],
            [
                "name"=>"Adidus QQ Racer Shoe",
                "description"=>"A nice style for shoes",
                "image"=>"Adidus_QQ_Racer_Shoe.jpg",
                "price"=>"995000"
            ],
            [
                "name"=>"Niko Revolve 5 Shoe",
                "description"=>"Design for older kids running",
                "image"=>"Niko_Revolve_5_Shoe.jpg",
                "price"=>"1500000"
            ],
            [
                "name"=>"Niko Air Min Women Shoe",
                "description"=>"Nike but Niko for women shoes",
                "image"=>"Niko_Air_Min_Women_Shoe.jpg",
                "price"=>"890000"
            ],
            [
                "name"=>"Adidus Super Star Shoe",
                "description"=>"Design to look alike Adidas Superstar",
                "image"=>"Adidus_Super_Star_Shoe.jpeg",
                "price"=>"1000000"
            ],
            [
                "name"=>"Niko Air Shoot Temp Shoe",
                "description"=>"Niko Air Shoot Series",
                "image"=>"Niko_Air_Shoot_Temp_Shoe.jpg",
                "price"=>"1340000"
            ],
            [
                "name"=>"Adidus Nick Jogger Shoe",
                "description"=>"Design for healthy jogging",
                "image"=>"Adidus_Nick_Jogger_Shoe.jpg",
                "price"=>"1255000"
            ],
            [
                "name"=>"Niko Tanjun Women Shoe",
                "description"=>"Women shoes by Niko that take aspiration from Nike",
                "image"=>"Adidus_Runfalcon_Kids_Running_Shoe.jpeg",
                "price"=>"900000"
            ],
            [
                "name"=>"Adidus Ultraboost Shoe",
                "description"=>"Adidus Ultraboost Series",
                "image"=>"Adidus_Ultraboost_Shoe.jpg",
                "price"=>"1600000"
            ],
            [
                "name"=>"Niko Vision High Es Shoe",
                "description"=>"High trend shoes for women",
                "image"=>"Niko_Vision_High_ES_Shoe.jpg",
                "price"=>"1300000"
            ],
            [
                "name"=>"Adidus Fullboost XD Shoe",
                "description"=>"Adidus Fullboost Series",
                "image"=>"Adidus_Fullboost_XD_Shoe.jpg",
                "price"=>"1500000"
            ],
            [
                "name"=>"Niko Air Shoot Pegasus Shoe",
                "description"=>"Cool Red shoes for older kids",
                "image"=>"Niko_Air_Shoot_Pegasus_Shoe.jpg",
                "price"=>"1000000"
            ],
            [
                "name"=>"Niko Court Air Min Shoe",
                "description"=>"Design for playing tennis",
                "image"=>"Niko_Court_Air_Min_Shoe.jpg",
                "price"=>"1100000"
            ],
            [
                "name"=>"Adidus Smith Stan Shoe",
                "description"=>"White color on outside with Green inside",
                "image"=>"Adidus_Smith_Stan_Shoe.jpg",
                "price"=>"900000"
            ]
        ]);
    }
}

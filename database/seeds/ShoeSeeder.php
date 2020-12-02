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
                "name"=>"Adidus Super Star",
                "description"=>"Design to look alike Adidas Superstar",
                "image"=>"Adidus_Super_Star.jpeg",
                "price"=>"1000000",
            ],
            [
                "name"=>"Niko Tanjun Women Shoe",
                "description"=>"Professionally Design to clone Nike Tajun",
                "image"=>"Niko_Tanjun_Women_Shoe.jpg",
                "price"=>"1100000",
            ],
            [
                "name"=>"Niko Air Force Men Shoe",
                "description"=>"Nike but Niko for Men Shoe",
                "image"=>"Niko_Air_Force_Men_Shoe.jpeg",
                "price"=>"1200000",
            ],
            [
                "name"=>"Niko Tanjun Women Shoe",
                "description"=>"Women Shoe by Niko that take aspiration from Nike",
                "image"=>"Adidus_Runfalcon_Kids_Running_Shoe.jpeg",
                "price"=>"900000",
            ],
        ]);
    }
}
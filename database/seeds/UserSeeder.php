<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "username"=>"admin",
                "email"=>"admin@admin.com",
                "password"=>bcrypt("admin"),
                "id_role"=>"1"
            ],
            [
                "username"=>"member",
                "email"=>"member@member.com",
                "password"=>bcrypt("member"),
                "id_role"=>"2"
            ]
        ]);
    }
}
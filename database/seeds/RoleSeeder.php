<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            [
                'id'=>'1',
                'role_name'=>'admin'
            ],
            [
                'id'=>'2',
                'role_name'=>'member'
            ]
        ]);
    }
}

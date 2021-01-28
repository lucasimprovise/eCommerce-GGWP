<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Lucas Sevault',
            'email'=>'lucas.sevault1@gmail.com',
            'password'=>Hash::make('lulu3232'),
            'birth'=>'10/06/2000'
        ]);
    }
}

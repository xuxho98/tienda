<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   public function run()
    {
        User::create([
            'name'=>'Jesus Sanchez Sarmiento',
            'email'=>'Jsansar18@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('12398752'), // password
            'remember_token' =>  Str::random(10),
        ]);
    }
}

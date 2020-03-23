<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->delete();
        User::create([
            "name" => "admin",
            "email" => "admin@usedcars.com",
            'password' => Hash::make('123'),
            "role" => "0"
        ]);
        
    }
}

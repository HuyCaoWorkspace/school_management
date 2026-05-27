<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alex Johnson',
            'email' => 'alex.johnson@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

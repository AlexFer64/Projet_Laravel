<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bobsmith@example.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}

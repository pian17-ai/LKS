<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'validator1',
                'password' => Hash::make(123456),
                'remember_token' => null
            ],
            [
                'username' => 'officer1',
                'password' => Hash::make(123456),
                'remember_token' => null
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ValidatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('validators')->insert([
            [
                'user_id' => 1,
                'role' => 'validator',
                'name' => 'Alvian Cahyo Pambudi'
            ],
            [
                'user_id' => 2,
                'role' => 'officer',
                'name' => 'Siraishi Junta'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'role' => 'officer',
                'name' => 'Alvian Cahyo Pambudi'
            ],
            [
                'user_id' => 1,
                'role' => 'validator',
                'name' => 'Fushi'
            ],
        ]);
    }
}

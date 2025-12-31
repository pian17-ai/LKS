<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            'name' => 'Ebina',
            'gender' => 'female',
            'phone_number' => '081288088801',
            'address' => 'kalibata, south jakarta',
            'email' => 'ebina@example.com',
            'bio' => 'pian gf'
        ]);
    }
}

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
            [
                'doctor_id' => '1',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '2',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '3',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '4',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '5',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '6',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '7',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '8',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '9',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
            [
                'doctor_id' => '10',
                'name' => 'Ebina',
                'gender' => 'female',
                'phone_number' => '081288088801',
                'address' => 'kalibata, south jakarta',
                'email' => 'ebina@example.com',
                'bio' => 'pian gf'
            ],
        ]);
    }
}

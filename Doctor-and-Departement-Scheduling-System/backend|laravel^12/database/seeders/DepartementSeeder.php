<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departements')->insert([
            [
                'departement_id' => '1',
                'departement_name' => 'Poli Gigi',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '15',
                'departement_name' => 'Poli Kaki',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '3',
                'departement_name' => 'Poli Anak',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '4',
                'departement_name' => 'Poli Ginjal',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '5',
                'departement_name' => 'Poli Paru Paru',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '6',
                'departement_name' => 'Poli Otak',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '7',
                'departement_name' => 'Poli Hidung',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '8',
                'departement_name' => 'Poli Jantung',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '9',
                'departement_name' => 'Poli Mata',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '10',
                'departement_name' => 'Poli Rambut',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '11',
                'departement_name' => 'Poli Tangan',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '12',
                'departement_name' => 'Poli Usus',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '13',
                'departement_name' => 'Poli Lambung',
                'departement_description' => 'ini poli'
            ],
            [
                'departement_id' => '14',
                'departement_name' => 'Poli Kuku',
                'departement_description' => 'ini poli'
            ]
        ]);
    }
}

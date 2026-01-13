<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class SocietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('societies')->insert([
            [
                'id_card_number' => 20210001,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210002,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210003,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210004,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210005,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210006,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210007,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210008,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210009,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210010,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210011,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210012,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210013,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210014,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
            [
                'id_card_number' => 20210015,
                'password' => 1212112,
                'name' => 'Siraishi Junta',
                'born_date' => now(),
                'gender' => 'male',
                'address' => 'Jl TMPN Kalibata',
                'regional_id' => 1
            ],
        ]);
    }
}

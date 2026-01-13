<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarMonthOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_month_options')->insert([
                // BMW
                ['car_id' => 1, 'month' => 12, 'interest' => 6.5],
                ['car_id' => 1, 'month' => 24, 'interest' => 7.5],
                ['car_id' => 1, 'month' => 36, 'interest' => 8.5],

                ['car_id' => 2, 'month' => 12, 'interest' => 6.2],
                ['car_id' => 2, 'month' => 24, 'interest' => 7.2],
                ['car_id' => 2, 'month' => 36, 'interest' => 8.2],

                ['car_id' => 3, 'month' => 12, 'interest' => 6.0],
                ['car_id' => 3, 'month' => 24, 'interest' => 7.0],
                ['car_id' => 3, 'month' => 36, 'interest' => 8.0],

                ['car_id' => 4, 'month' => 12, 'interest' => 6.3],
                ['car_id' => 4, 'month' => 24, 'interest' => 7.3],
                ['car_id' => 4, 'month' => 36, 'interest' => 8.3],

                ['car_id' => 5, 'month' => 12, 'interest' => 6.1],
                ['car_id' => 5, 'month' => 24, 'interest' => 7.1],
                ['car_id' => 5, 'month' => 36, 'interest' => 8.1],

                // Porsche
                ['car_id' => 6, 'month' => 12, 'interest' => 6.2],
                ['car_id' => 6, 'month' => 24, 'interest' => 7.2],
                ['car_id' => 6, 'month' => 36, 'interest' => 8.2],

                ['car_id' => 7, 'month' => 12, 'interest' => 5.8],
                ['car_id' => 7, 'month' => 24, 'interest' => 6.8],
                ['car_id' => 7, 'month' => 36, 'interest' => 7.8],

                ['car_id' => 8, 'month' => 12, 'interest' => 6.0],
                ['car_id' => 8, 'month' => 24, 'interest' => 7.0],
                ['car_id' => 8, 'month' => 36, 'interest' => 8.0],

                ['car_id' => 9, 'month' => 12, 'interest' => 5.9],
                ['car_id' => 9, 'month' => 24, 'interest' => 6.9],
                ['car_id' => 9, 'month' => 36, 'interest' => 7.9],

                ['car_id' => 10, 'month' => 12, 'interest' => 6.0],
                ['car_id' => 10, 'month' => 24, 'interest' => 7.0],
                ['car_id' => 10, 'month' => 36, 'interest' => 8.0],

                // JDM
                ['car_id' => 11, 'month' => 12, 'interest' => 7.0],
                ['car_id' => 11, 'month' => 24, 'interest' => 8.0],
                ['car_id' => 11, 'month' => 36, 'interest' => 9.0],

                ['car_id' => 12, 'month' => 12, 'interest' => 6.5],
                ['car_id' => 12, 'month' => 24, 'interest' => 7.5],
                ['car_id' => 12, 'month' => 36, 'interest' => 8.5],

                ['car_id' => 13, 'month' => 12, 'interest' => 7.5],
                ['car_id' => 13, 'month' => 24, 'interest' => 8.5],
                ['car_id' => 13, 'month' => 36, 'interest' => 9.5],

                ['car_id' => 14, 'month' => 12, 'interest' => 7.8],
                ['car_id' => 14, 'month' => 24, 'interest' => 8.8],
                ['car_id' => 14, 'month' => 36, 'interest' => 9.8],

                ['car_id' => 15, 'month' => 12, 'interest' => 7.2],
                ['car_id' => 15, 'month' => 24, 'interest' => 8.2],
                ['car_id' => 15, 'month' => 36, 'interest' => 9.2],

                // Hypercar
                ['car_id' => 16, 'month' => 12, 'interest' => 4.5],
                ['car_id' => 16, 'month' => 24, 'interest' => 5.5],
                ['car_id' => 16, 'month' => 36, 'interest' => 6.5],

                ['car_id' => 17, 'month' => 12, 'interest' => 5.0],
                ['car_id' => 17, 'month' => 24, 'interest' => 6.0],
                ['car_id' => 17, 'month' => 36, 'interest' => 7.0],

                ['car_id' => 18, 'month' => 12, 'interest' => 5.2],
                ['car_id' => 18, 'month' => 24, 'interest' => 6.2],
                ['car_id' => 18, 'month' => 36, 'interest' => 7.2],

                ['car_id' => 19, 'month' => 12, 'interest' => 4.8],
                ['car_id' => 19, 'month' => 24, 'interest' => 5.8],
                ['car_id' => 19, 'month' => 36, 'interest' => 6.8],

                ['car_id' => 20, 'month' => 12, 'interest' => 4.3],
                ['car_id' => 20, 'month' => 24, 'interest' => 5.3],
                ['car_id' => 20, 'month' => 36, 'interest' => 6.3],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('installments')->insert([
            [
                'brand_id' => 1,
                'cars' => 'Toyota Alphard',
                'description' => 'This car is perfect for family car',
                'price' => 1600000000
            ],
            [
                'brand_id' => 2,
                'cars' => 'BMW M4 Competition',
                'description' => 'The car is very sporty and high HP',
                'price' => 2800000000
            ],
            [
                'brand_id' => 3,
                'cars' => 'Bugatti Chiron',
                'description' => 'The car is very sporty and high HP',
                'price' => 50800000000
            ],
            [
                'brand_id' => 4,
                'cars' => 'Jeep Rubicon',
                'description' => 'Car for touring',
                'price' => 1400000000
            ],
            [
                'brand_id' => 5,
                'cars' => 'Porsche 911 GT3 RS',
                'description' => 'The car is very sporty and high HP',
                'price' => 12800000000
            ],
        ]);
    }
}

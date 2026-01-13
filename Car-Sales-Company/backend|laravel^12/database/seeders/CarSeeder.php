<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert(
            [
                [
                    'id' => 1,
                    'car' => 'M3 Competition',
                    'brand' => 'BMW',
                    'price' => 1500000000,
                    'description' => 'BMW sport sedan dengan performa tinggi dan handling presisi'
                ],
                [
                    'id' => 2,
                    'car' => 'M4 CSL',
                    'brand' => 'BMW',
                    'price' => 2300000000,
                    'description' => 'Coupe ringan edisi track-focused dari BMW M'
                ],
                [
                    'id' => 3,
                    'car' => 'M5 CS',
                    'brand' => 'BMW',
                    'price' => 3500000000,
                    'description' => 'Sedan mewah berperforma ekstrem dengan mesin V8'
                ],
                [
                    'id' => 4,
                    'car' => 'i8 Coupe',
                    'brand' => 'BMW',
                    'price' => 2800000000,
                    'description' => 'Sports car hybrid futuristik dengan desain ikonik'
                ],
                [
                    'id' => 5,
                    'car' => 'X6 M',
                    'brand' => 'BMW',
                    'price' => 3200000000,
                    'description' => 'SUV sporty dengan tenaga besar dan kenyamanan premium'
                ],

                [
                    'id' => 6,
                    'car' => '911 Carrera',
                    'brand' => 'Porsche',
                    'price' => 2800000000,
                    'description' => 'Sports car legendaris dengan keseimbangan performa dan daily use'
                ],
                [
                    'id' => 7,
                    'car' => '911 GT3',
                    'brand' => 'Porsche',
                    'price' => 5200000000,
                    'description' => 'Mobil track-day dengan mesin naturally aspirated'
                ],
                [
                    'id' => 8,
                    'car' => '718 Cayman GT4',
                    'brand' => 'Porsche',
                    'price' => 3900000000,
                    'description' => 'Coupe mid-engine dengan handling tajam'
                ],
                [
                    'id' => 9,
                    'car' => 'Panamera Turbo S',
                    'brand' => 'Porsche',
                    'price' => 4200000000,
                    'description' => 'Sedan sport mewah dengan performa supercar'
                ],
                [
                    'id' => 10,
                    'car' => 'Taycan Turbo',
                    'brand' => 'Porsche',
                    'price' => 4100000000,
                    'description' => 'Mobil listrik performa tinggi khas Porsche'
                ],

                [
                    'id' => 11,
                    'car' => 'Supra MK5',
                    'brand' => 'JDM',
                    'price' => 2200000000,
                    'description' => 'Sports car JDM modern dengan mesin turbo bertenaga'
                ],
                [
                    'id' => 12,
                    'car' => 'GT-R R35',
                    'brand' => 'JDM',
                    'price' => 3500000000,
                    'description' => 'Supercar Jepang dengan sistem AWD legendaris'
                ],
                [
                    'id' => 13,
                    'car' => 'RX-7 FD',
                    'brand' => 'JDM',
                    'price' => 1800000000,
                    'description' => 'Ikon JDM bermesin rotary dengan desain timeless'
                ],
                [
                    'id' => 14,
                    'car' => 'Civic Type R',
                    'brand' => 'JDM',
                    'price' => 1200000000,
                    'description' => 'Hot hatch FWD dengan performa track-ready'
                ],
                [
                    'id' => 15,
                    'car' => 'WRX STI',
                    'brand' => 'JDM',
                    'price' => 1400000000,
                    'description' => 'Sedan rally-inspired dengan AWD dan turbo'
                ],

                [
                    'id' => 16,
                    'car' => 'Chiron',
                    'brand' => 'Hypercar',
                    'price' => 45000000000,
                    'description' => 'Hypercar dengan kecepatan dan kemewahan ekstrem'
                ],
                [
                    'id' => 17,
                    'car' => 'Aventador SVJ',
                    'brand' => 'Hypercar',
                    'price' => 18000000000,
                    'description' => 'V12 naturally aspirated dengan desain agresif'
                ],
                [
                    'id' => 18,
                    'car' => 'SF90 Stradale',
                    'brand' => 'Hypercar',
                    'price' => 14000000000,
                    'description' => 'Hypercar hybrid Ferrari dengan teknologi F1'
                ],
                [
                    'id' => 19,
                    'car' => 'McLaren P1',
                    'brand' => 'Hypercar',
                    'price' => 20000000000,
                    'description' => 'Hypercar hybrid dengan fokus aerodinamika'
                ],
                [
                    'id' => 20,
                    'car' => 'Jesko',
                    'brand' => 'Hypercar',
                    'price' => 50000000000,
                    'description' => 'Hypercar ekstrem dengan fokus top speed'
                ]
            ]

        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Installment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailableMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $installments = Installment::all();
        $months = [12, 24, 36];

        foreach ($installments as $installment) {
            foreach ($months as $month) {
                DB::table('available_month')->insert([
                    'installment_id' => $installment->id,
                    'month' => $month,
                    'description' => $installment->cars . ' dicicil ' . $month . ' bulan',
                    'nominal' => (int) ($installment->price / $month)
                ]);
            }
        }
    }
}

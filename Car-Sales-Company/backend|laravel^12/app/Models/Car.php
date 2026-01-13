<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car',
        'brand',
        'price',
        'description'
    ];

    public function car_month_options() {
        return $this->hasMany(CarMonthOption::class);
    }

    public function installment_applications() {
        return $this->hasMany(InstallmentApplication::class);
    }
}

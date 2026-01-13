<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarMonthOption extends Model
{
    protected $fillable = [
        'car_id',
        'month',
        'interest'
    ];

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function installment_applications() {
        return $this->hasMany(InstallmentApplication::class);
    }
}

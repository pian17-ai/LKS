<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentApplication extends Model
{
    protected $fillable = [
        'society_id',
        'validator_id',
        'car_id',
        'car_month_option_id',
        'status',
        'admin_notes'
    ];

    public function society() {
        return $this->belongsTo(Society::class);
    }

    public function validator() {
        return $this->belongsTo(Validator::class);
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function car_month_option() {
        return $this->belongsTo(CarMonthOption::class);
    }
}

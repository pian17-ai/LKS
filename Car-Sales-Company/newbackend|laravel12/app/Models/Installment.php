<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = [
        'brand_id',
        'cars',
        'description',
        'price'
    ];

    public $timestamps = false;

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function available_month() {
        return $this->hasMany(AvailableMonth::class);
    }

    public function installment_apply_status() {
        return $this->hasMany(InstallmentApplyStatus::class);
    }

    public function installment_apply_societies() {
        return $this->hasMany(InstallmentApplySociety::class);
    }
}

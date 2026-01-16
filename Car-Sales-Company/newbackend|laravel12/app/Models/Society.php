<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Laravel\Sanctum\HasApiTokens;

class Society extends User
{
    use HasApiTokens;

    protected $fillable = [
        'id_card_number',
        'password',
        'name',
        'born_date',
        'gender',
        'address',
        'regional_id'
    ];

    public $timestamps = false;

    public function regional() {
        return $this->belongsTo(Regional::class);
    }

    public function validation() {
        return $this->hasOne(Validation::class);
    }

    public function installment_apply_status() {
        return $this->hasMany(InstallmentApplyStatus::class);
    }

    public function installment_apply_societies() {
        return $this->hasMany(InstallmentApplySociety::class);
    }
}

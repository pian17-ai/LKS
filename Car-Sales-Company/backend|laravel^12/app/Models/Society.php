<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    public function regional() {
        return $this->belongsTo(Regional::class);
    }

    public function validation() {
        return $this->hasOne(Validation::class);
    }

    public function installment_applications() {
        return $this->hasMany(InstallmentApplication::class);
    }
}

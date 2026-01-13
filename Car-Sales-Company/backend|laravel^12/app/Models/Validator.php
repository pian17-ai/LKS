<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validator extends Model
{
    protected $fillable = [
        'user_id',
        'role',
        'name'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function validations() {
        return $this->hasMany(Validation::class);
    }

    public function installment_applications() {
        return $this->hasMany(InstallmentApplication::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailableMonth extends Model
{
    protected $table = 'available_month';

    protected $fillable = [
        'installment_id',
        'month',
        'description',
        'nominal'
    ];

    public $timestamps = false;

    public function installment() {
        return $this->belongsTo(Installment::class);
    }

    public function installment_apply_status() {
        return $this->hasMany(InstallmentApplyStatus::class);
    }
}

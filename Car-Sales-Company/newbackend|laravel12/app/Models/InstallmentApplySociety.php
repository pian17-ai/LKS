<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentApplySociety extends Model
{
    protected $fillable = [
        'notes',
        'available_month_id',
        'date',
        'society_id',
        'installment_id'
    ];

    public $timestamps = false;

    public function society() {
        return $this->belongsTo(Society::class);
    }

    public function installment() {
        return $this->belongsTo(Installment::class);
    }

    public function installment_apply_status() {
        return $this->hasMany(InstallmentApplyStatus::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentApplyStatus extends Model
{
    protected $fillable = [
        'date',
        'society_id',
        'installment_id',
        'available_month_id',
        'installment_apply_societies_id',
        'status'
    ];

    public $timestamps = false;

    public function society() {
        return $this->belongsTo(Society::class);
    }
    
    public function installment() {
        return $this->belongsTo(Installment::class);
    }

    public function available_month() {
        return $this->belongsTo(AvailableMonth::class);
    }

    public function installment_apply_society() {
        return $this->belongsTo(InstallmentApplySociety::class);
    }
}

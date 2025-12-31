<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'doctor_id',
        'departement_id',
        'schedule_date',
        'schedule_start',
        'schedule_end',
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function departement() {
        return $this->belongsTo(Departement::class);
    }
}

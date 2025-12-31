<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'departement_id',
        'departement_name',
        'departement_description',
    ];

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand'
    ];

    public $timestamps = false;

    public function instalments() {
        return $this->hasMany(Installment::class);
    }
}

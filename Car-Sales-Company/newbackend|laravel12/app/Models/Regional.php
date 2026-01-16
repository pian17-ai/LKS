<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $fillable = [
        'province',
        'district'
    ];

    public $timestamps = false;

    public function society() {
        return $this->hasMany(Society::class);
    }
}

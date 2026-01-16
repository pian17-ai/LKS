<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Sanctum\HasApiTokens;

class User extends AuthUser
{
    use HasApiTokens;

    protected $fillable = [
        'username',
        'password'
    ];

    public $timestamps = false;

    public function validator() {
        return $this->hasOne(Validator::class);
    }
}

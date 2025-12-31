<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Sanctum\HasApiTokens;

class User extends AuthUser
{
    use HasApiTokens;

    protected $fillable = [
        'full_name',
        'username',
        'password',
        'role'
    ];
}

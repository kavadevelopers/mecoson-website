<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUsers extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_users';

    protected $guard = 'admin';

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'admin_type',
        'name',
        'username',
        'password',
        'email',
        'mobile',
        'gender',
        'rights',
        'is_deleted',
        'is_blocked'
    ];
}

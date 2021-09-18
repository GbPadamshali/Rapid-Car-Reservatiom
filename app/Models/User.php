<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
// class User extends Authenticatable
{
    use Authenticatable;
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'role_id',
        'first_name',
        'last_name',
        'full_name',
        'email',
        'password',
        'phone',
        'image',
        'dob',
        'status',
        'token',
        'verified',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [];
    protected $appends = [];
}

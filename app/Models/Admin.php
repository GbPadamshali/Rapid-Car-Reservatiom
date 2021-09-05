<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use Notifiable;
    use SoftDeletes;

    // protected $table = 'users';

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
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [];
    protected $appends = [];
}

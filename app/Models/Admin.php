<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [];
    protected $appends = [];
}

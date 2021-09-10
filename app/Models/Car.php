<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'cars';

    protected $fillable = [
        'name',
        'owner',
        'make',
        'model',
        'year_built',
        'status'
    ];
    protected $casts = [];
    protected $appends = [];

    /**
     * Get active result query
    */
    public function scopeActive($query) {
        return $query->where('status', 'active');
    }

    /**
     * Get the image record associated with the car.
    */
    public function image()
    {
        return $this->hasMany('App\Models\CarImage','car_id','id');
    }
}

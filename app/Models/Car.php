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
        'owner_id ',
        'name',
        'make',
        'model',
        'year',
        'body',
        'color',
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

    public function image_test()
    {
        return $this->belongsTo('App\Models\CarImage','id','car_id');
    }
    /**
     * Get the image record associated with the car.
    */
    public function user()
    {
        return $this->belongsTo('App\Models\User','owner_id','id');
    }
}

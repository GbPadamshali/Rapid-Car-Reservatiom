<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarImage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'car_images';

    protected $fillable = [
        'car_id',
        'image_name',
        'original_name',
    ];
    protected $casts = [];
    protected $appends = [];
}

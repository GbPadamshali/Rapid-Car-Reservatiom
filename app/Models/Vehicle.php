<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'vehicle_id',
        'car_id',
        'bank_id',
        'company_id',
        'cost',
        'title',
        'vin_number',
        'licence_plate_number',
        'reg_due_date',
        'date_of_purchase',
        'registration_city',
        'city_sticker_expiry',
        'insurance_company',
        'insurance_policy_number',
        'insurance_till_date',
        'inspection_till_date',
    ];

    public function bank()
    {
        return $this->belongsTo('App\Models\Bank','bank_id','id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id','id');
    }

    public function car()
    {
        return $this->belongsTo('App\Models\Car','car_id','id');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            \DB::table('vehicles')->insert([
                'vehicle_id' => 'L1'.$i,
                'car_id' => '1',
                'company_id' => '13',
                'bank_id' => '1',
                'cost' => '50000',
                'title' => "TEST".$i,
                'vin_number' => "UNIQ_".$i.rand(),
                'licence_plate_number' => '1234'.$i,
                'reg_due_date' =>  date('Y-m-d'),
                'date_of_purchase' => date('Y-m-d'),
                'registration_city' => 'AHMEDABAD',
                'city_sticker_expiry' => date('Y-m-d'),
                'insurance_company' => 'LIC',
                'insurance_policy_number' => "1021".rand().uniqid(),
                'vin_number' => rand().uniqid(),
                'insurance_till_date' => date('Y-m-d'),
                'inspection_till_date' => date('Y-m-d'),
            ]);
        }
    }
}

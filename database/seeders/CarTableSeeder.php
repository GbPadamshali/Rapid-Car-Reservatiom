<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        for ($i=0; $i < 20; $i++) { 
            \DB::table('cars')->insert([
                'owner_id' => '1',
                'name' => 'FORD',
                'make' => 'FORD',
                'model' => 'F'.$i,
                'year' => '2021',
                'body' => "TEST",
                'color' => "RED",
                'status' => 'active',
            ]);
        }*/
        for ($i=0; $i < 240; $i++) { 
            \DB::table('car_images')->insert([
                'car_id' => $i +1,
                'image' => '123456.png',
                'original_name' => '123456.png',
            ]);
        }
    }
}

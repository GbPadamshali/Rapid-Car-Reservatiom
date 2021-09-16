<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('vehicle_id')->unique();

            $table->integer('car_id');
            $table->foreign('car_id')->references('id')->on('cars');

      //    $table->unsignedBigInteger('company_id');
     //     $table->foreign('company_id')->references('id')->on('company');

            $table->string('company',100);

       //    $table->unsignedBigInteger('bank_id');
      //     $table->foreign('bank_id')->references('id')->on('bank');

            $table->string('bank',100);

            $table->year('year');
            $table->string('model',100);
            $table->string('vin_number',100);
            $table->string('body',100);
            $table->string('color',100);
            $table->string('status',100);
            $table->string('title',100);

            
            $table->float('cost', 8, 2);
            $table->date('reg_due_date');
            $table->string('licence_plate_number',11);
            $table->date('date_of_purchase');


            $table->string('insurance_company',100);
            $table->string('registration_city',100);
            $table->date('city_sticker_expiry');
            $table->string('insurance_policy_number',100);
            $table->date('insurance_till_date');
            $table->date('inspection_till_date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
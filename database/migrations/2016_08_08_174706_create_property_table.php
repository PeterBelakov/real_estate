<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->integer('property_type');
            $table->integer('location');
            $table->integer('price');
            $table->integer('region');
            $table->integer('quadrature');
            $table->integer('floor');
            $table->integer('floors');
            $table->integer('adv-construction');
            $table->string('date_of_construction');
            $table->integer('under_construction');
            $table->integer('with_transition');
            $table->integer('elevator');
            $table->integer('central');
            $table->integer('parking');
            $table->integer('garage');
            $table->integer('internet');
            $table->integer('furnished');
            $table->integer('cctv');
            $table->integer('access_control');
            $table->integer('security');
            $table->integer('renovated');
            $table->string('property_discription');
            $table->string('photo');
            $table->integer('adv-type');
            $table->integer('operating_business');
            $table->string('video');
            $table->string('e_mail');
            $table->string('gsm');
            $table->string('coordinates_x');
            $table->string('coordinates_y');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('property');
    }
}

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
            $table->string('property_type');
            $table->string('location');
            $table->string('price');
            $table->string('region');
            $table->string('quadrature');
            $table->integer('floor');
            $table->string('floors');
            $table->integer('panella');
            $table->integer('brick');
            $table->integer('epk');
            $table->integer('pk');
            $table->integer('beams');
            $table->string('date_of_construction');
            $table->integer('under_construction');
            $table->integer('with_transition');
            $table->integer('elevator');
            $table->integer('central');
            $table->integer('parking');
            $table->integer('garage');
            $table->integer('mortgaged');
            $table->integer('internet');
            $table->integer('furnished');
            $table->integer('cctv');
            $table->integer('access_control');
            $table->integer('security');
            $table->integer('renovated');
            $table->string('property_discription');
            $table->string('photo');
            $table->string('validity_of_the_notice');
            $table->integer('phone');
            $table->integer('gsm');
            $table->string('e_mail');
            $table->string('video');
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

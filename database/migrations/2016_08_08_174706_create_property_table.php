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
            $table->string('type_of_construction');
            $table->string('date_of_construction');
            $table->string('particularities');
            $table->string('property_discription');
            $table->string('photo');
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

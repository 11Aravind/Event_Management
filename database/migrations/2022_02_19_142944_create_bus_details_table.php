<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_details', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('towner_id');
            // $table->bigIncrements
            $table->bigIncrements('bus_id');
            $table->foreign('towner_id')->references('towner_id')->on('travelkyc')->onDelete('cascade');
            // $table->unsignedBigInteger('user_id');
$table->string('busname');
$table->string('Taxi_type');
$table->string('Taxi_number');
$table->string('seating_capacity');
$table->string('taxi_pic');
$table->string('taxi_category');
$table->string('price');
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
        Schema::dropIfExists('bus_details');
    }
}

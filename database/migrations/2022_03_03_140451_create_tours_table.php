<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id("tour_id");
            $table->unsignedBigInteger("bus_id");//foregin key unsignedBigInteger
            $table->string('dateofDeparture');
            $table->string("dateofarrival");
            $table->string("days");
            $table->string("MainDescription");
            $table->string("Price");
            $table->string("PriceDescription");
            // $table->string("journystartinftime");
            $table->foreign('bus_id')->references('bus_id')->on('bus_details')->onDelete('cascade');

            // $table->foreign('category_id')->references('category_id')->on('categorys')->onDelete('cascade');

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
        Schema::dropIfExists('tours');
    }
}

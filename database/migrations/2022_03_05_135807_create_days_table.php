<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->id('day_id');
            $table->unsignedBigInteger("tour_id");
            $table->string("Mornigtoureplace");
            $table->string("Afternoon");
            $table->string("NightPrograms");
            $table->string("hotelname");
            $table->string("Hpic");
            $table->string("Locality");
            $table->foreign('tour_id')->references('tour_id')->on('tours')->onDelete('cascade');
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
        Schema::dropIfExists('days');
    }
}

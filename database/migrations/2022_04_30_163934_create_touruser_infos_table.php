<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouruserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touruser_infos', function (Blueprint $table) {
            $table->id('userinfo_id');
            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('tour_id')->on('tours')->onDelete('cascade');

            $table->string('name');
            $table->string('contact_no');
            $table->string('address');
            $table->string('no_of_seat');
            $table->string('total_price');
            
// tour_id->foregin key

            $table->string('payment_id')->nullable();
            $table->string('rezorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);


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
        Schema::dropIfExists('touruser_infos');
    }
}

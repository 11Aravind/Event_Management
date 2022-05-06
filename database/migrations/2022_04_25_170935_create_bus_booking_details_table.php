<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_booking_details', function (Blueprint $table) {
            $table->id('busbooking_id');
            
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('authentications')->onDelete('cascade');


$table->unsignedBigInteger('towner_id');
$table->foreign('towner_id')->references('towner_id')->on('travelkyc')->onDelete('cascade');

$table->unsignedBigInteger('bus_id');
$table->foreign('bus_id')->references('bus_id')->on('bus_details')->onDelete('cascade');


$table->string('dateOfEvent');
$table->string('time');
$table->string('startingplace');
$table->string('arrivalplace');
$table->string('kolometers');
$table->string('totelprice');


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
        Schema::dropIfExists('bus_booking_details');
    }
}

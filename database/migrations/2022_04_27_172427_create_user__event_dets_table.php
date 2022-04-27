<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEventDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__event_dets', function (Blueprint $table) {
            $table->id('eventdet_id');
           
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');

            // $table->timestamps();
$table->string('noofseat');
$table->string('totalamount');

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
        Schema::dropIfExists('user__event_dets');
    }
}

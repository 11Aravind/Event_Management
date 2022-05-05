<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // $table->id();
            $table->id('event_id');
$table->unsignedBigInteger('category_id');
// $table->foregin('category_id')->reference('category_id')->on('categorys');
$table->foreign('category_id')->references('category_id')->on('categorys')->onDelete('cascade');


$table->string('event_name');
// $table->string('event_category');
$table->string('event_banner');
$table->string('event_date');
$table->string('starting_time');
$table->string('duration');
$table->string('duration_time');
$table->string('ticketprice');
$table->string('totel_ticket');
$table->string('discount');
$table->string('discount_end');
$table->string('event_discription');
$table->boolean("status")->default(0);
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
        Schema::dropIfExists('events');
    }
}

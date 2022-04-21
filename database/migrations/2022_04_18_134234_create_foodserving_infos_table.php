<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodservingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodserving_infos', function (Blueprint $table) {
            $table->id('UserEvent_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('addproducts')->onDelete('cascade');
            // $table->timestamps();
$table->string('dateOfEvent');
$table->string('EventLocation');
$table->string('ServingStartingtime');
$table->string('Servingendingtime');
$table->string('servingtype');
$table->string('noOfGust');
$table->string('noofemploy');
$table->string('Totalprice');
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
        Schema::dropIfExists('foodserving_infos');
    }
}

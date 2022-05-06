<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_orders', function (Blueprint $table) {
            $table->id('Order_id');
            //which employ
            $table->unsignedBigInteger('employ_id');
            $table->foreign('employ_id')->references('employ_id')->on('employs')->onDelete('cascade');
            $table->string('work_type');
            $table->string('contact_no');
            
            $table->string('date');
            $table->string('time');
            $table->string('address');
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
        Schema::dropIfExists('store_orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('user_id');
            $table->bigIncrements('address_id');
            $table->string('name');
            $table->bigInteger('mobileno');
            $table->string('pincode');
            $table->string('locality');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('Aphoneno')->nullable();
            $table->string('delivarplace');
            $table->foreign('user_id')->references('user_id')->on('authentications');
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
        Schema::dropIfExists('address');
    }
}

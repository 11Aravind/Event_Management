<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelkycTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelkyc', function (Blueprint $table) {
            $table->bigIncrements('towner_id');
            
            $table->unsignedBigInteger('user_id');
            $table->string('ownername');
            $table->string('Tagency_name');
            $table->string('landline')->nullable();
            $table->string('moblieno');
            $table->string('alternate_no')->nullable();
            $table->string('licence_expiredate');
            $table->string('owner_photo');
            $table->string('licencepic');
            $table->string('pincode');
$table->string('locality');
$table->string('city');
$table->string('district');
$table->boolean('status')->default(0);
$table->foreign('user_id')->references('user_id')->on('authentications');
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
        Schema::dropIfExists('travelkyc');
    }
}

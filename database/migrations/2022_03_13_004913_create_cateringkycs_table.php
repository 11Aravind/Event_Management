<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringkycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cateringkycs', function (Blueprint $table) {
            $table->id('Catering_id');
            $table->unsignedBigInteger('user_id');
$table->string('cateringservicename');

$table->string('ownername');
$table->string('mobileno');
$table->string('alterphoneno');
$table->string('bannerpic');
$table->string('owner_pic');
$table->string('pincode');
$table->string('locality');
$table->string('city');
$table->string('district');
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
        Schema::dropIfExists('cateringkycs');
    }
}

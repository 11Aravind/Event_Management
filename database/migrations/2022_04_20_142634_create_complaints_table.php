<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
           
            $table->id('complaint_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('user_id')->on('authentications');
            $table->string('subject');
            $table->string('proof')->nullable();
            $table->string('complaint');
          
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
        Schema::dropIfExists('complaints');
    }
}

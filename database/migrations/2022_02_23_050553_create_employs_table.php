<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->id('employ_id');
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('user_id')->on('authentications')->onDelete('cascade');

            $table->string('employ_name');
            $table->string('email');
            $table->string('contact_no');
            $table->string('job_position');
            
            $table->string('employ_photo');
            $table->string('id_proof');
            $table->string('qualification');
            $table->string('experience');
            $table->string('cirtificate');
           $table->string('status');
            
            // $table->string('contact_no');
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
        Schema::dropIfExists('employs');
    }
}

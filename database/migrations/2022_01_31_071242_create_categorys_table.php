<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->id('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('category_name');
            $table->string('discription');
            $table->string('cat_type');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('authentications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('category_id');
            //forign key
            $table->foreign('category_id')->references('category_id')->on('categorys')->onDelete('cascade');

            $table->string('product_name');
            $table->biginteger('product_price');
$table->string('product_photo');
$table->string('product_quentity');

$table->string('product_discription');
$table->string('status');
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
        Schema::dropIfExists('addproducts');
    }
}

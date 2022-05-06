<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_packages', function (Blueprint $table) {
            $table->id('package_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('authentications')->onDelete('cascade');
            $table->string('package_use');
            // $table->string('rent_amount');
            // $table->string('package_image');
            $table->string('total_amount');
            // $table->string('type');
            $table->string('discription');
            $table->json('PackageProducts');
            // $table->string('subbanners');
            
            $table->string('payment_id')->nullable();
            $table->string('rezorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);
            $table->boolean('status')->default(0);
            // $table->foregin('PackageProducts')->references('product_id')->on('addproducts');
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
        Schema::dropIfExists('custom_packages');
    }
}

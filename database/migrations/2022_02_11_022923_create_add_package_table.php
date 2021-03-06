<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_package', function (Blueprint $table) {
            $table->id('package_id');
            $table->string('package_use');
            $table->string('rent_amount');
            $table->string('package_image');
            $table->string('total_amount');
            $table->string('type');
            $table->string('discription');
            $table->json('PackageProducts');
            $table->string('subbanners');
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
        Schema::dropIfExists('add_package');
    }
}

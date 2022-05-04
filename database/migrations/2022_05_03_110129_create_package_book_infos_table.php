<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBookInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_book_infos', function (Blueprint $table) {
            $table->id('bookpackage_id');
            
            
            // $table->string('user_id');
            // $table->string('package_id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('authentications')->onDelete('cascade');
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')->references('package_id')->on('add_package')->onDelete('cascade');
$table->string('name');
$table->string('mobile_no');
$table->string('locality');
$table->string('address');
$table->string('event_date');
$table->string('time');
$table->string('Duration');
$table->string('total_amount');

    $table->string('payment_id')->nullable();
            $table->string('rezorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);

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
        Schema::dropIfExists('package_book_infos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pro_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->string('name', 255);
            $table->integer('quantity')->unsigned(); 
            $table->double('unit_price', 8, 2);
            $table->string('size',255);
            $table->tinyInteger('status');

            $table->foreign('pro_id')->references('id')->on('products');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_details');
    }
}

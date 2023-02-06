<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->unique();
            $table->double('price');
            $table->double('sale_price');
            $table->text('description');
            // $table->bigInteger('size_id')->unsigned();
            // $table->bigInteger('color_id')->unsigned();
            $table->string('image',255);
            $table->tinyInteger('status');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('promotion_id')->unsigned();
            $table->string('origin',255);
            $table->string('year',255);
            $table->integer('stock')->unsigned();
            // $table->foreign('size_id')->references('id')->on('attributes');
            // $table->foreign('color_id')->references('id')->on('attributes');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('promotion_id')->references('id')->on('promotions');

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
        Schema::dropIfExists('products');
    }
}

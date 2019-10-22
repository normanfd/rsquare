<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('product_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_rating');
            $table->string('product_image')->nullable();
            $table->string('product_stock');
            $table->string('product_brand');
            $table->string('product_desc');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_products');
    }
}

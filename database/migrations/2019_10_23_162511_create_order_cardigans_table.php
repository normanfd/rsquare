<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderCardigansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cardigans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('cardigan_id');
            $table->integer('color_id');
            
            $table->integer('amount');
            $table->integer('total_price');
            $table->string('note');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('cardigan_id')->references('id')->on('cardigans')->onDelete('CASCADE');
            $table->foreign('color_id')->references('id')->on('color_cardigans')->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_cardigans');
    }
}

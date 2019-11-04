<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTshirtOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tshirt_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tshirt_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('material');
            $table->string('color');
            $table->string('sleeve');
            $table->string('size');
            $table->string('upload_design');
            $table->integer('amount');
            $table->string('wa_number');
            $table->string('note');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('tshirt_id')->references('id')->on('tshirts')->onDelete('CASCADE');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tshirt_orders');
    }
}

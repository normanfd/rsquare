<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoodieOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoodie_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoodie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('material');
            $table->string('color');
            $table->string('collar');
            $table->string('sleeve');
            $table->string('sleeve_model');
            $table->string('pocket');
            $table->string('size');
            $table->string('upload_design');
            $table->integer('amount');
            $table->string('wa_number');
            $table->string('note');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('hoodie_id')->references('id')->on('hoodies')->onDelete('CASCADE');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoodie_orders');
    }
}

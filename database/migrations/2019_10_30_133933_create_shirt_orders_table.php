<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShirtOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirt_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shirt_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('material');
            $table->string('color');
            $table->string('collar');
            $table->string('sleeve');
            $table->string('sleeve_model');
            $table->string('pocket');
            $table->string('buttons');
            $table->string('size');
            $table->string('upload_design');
            $table->integer('amount');
            $table->string('wa_number');
            $table->string('note');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('shirt_id')->references('id')->on('shirts')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shirt_orders');
    }
}

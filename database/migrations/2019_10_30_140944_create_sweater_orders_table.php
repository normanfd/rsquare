<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSweaterOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweater_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sweater_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('material');
            $table->string('color');
            $table->string('collar');
            $table->string('sleeve');
            $table->string('sleeve_model');
            $table->string('pocket');
            $table->integer('size');
            $table->string('upload_design');
            $table->integer('amount');
            $table->string('wa_number');
            $table->string('note');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('sweater_id')->references('id')->on('sweaters')->onDelete('CASCADE');                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sweater_orders');
    }
}

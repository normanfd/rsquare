<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shoes_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('color');
            $table->string('material');
            $table->integer('size');
            $table->integer('amount');
            $table->string('wa_number');
            $table->string('note');
            $table->timestamps();

            $table->foreign('shoes_id')->references('id')->on('shoes')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes_orders');
    }
}

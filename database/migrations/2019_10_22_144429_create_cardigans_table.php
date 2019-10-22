<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardigansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardigans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('cardigan_id');
            $table->string('cardigan_name');
            $table->string('cardigan_desc');
            $table->string('cardigan_price');
            $table->string('cardigan_image');
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
        Schema::dropIfExists('cardigans');
    }
}

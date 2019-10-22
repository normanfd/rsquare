<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoodies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('hoodie_id');
            $table->string('hoodie_name');
            $table->string('hoodie_desc');
            $table->string('hoodie_price');
            $table->string('hoodie_image');
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
        Schema::dropIfExists('hoodies');
    }
}

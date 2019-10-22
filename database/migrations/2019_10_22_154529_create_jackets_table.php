<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jackets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('category_id');
            $table->string('jacket_id');
            $table->string('jacket_name');
            $table->string('jacket_desc');
            $table->string('jacket_price');
            $table->string('jacket_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jackets');
    }
}

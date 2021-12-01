<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutPizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_pizzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id')->unique();
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->smallInteger('place');
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
        Schema::dropIfExists('layout_pizzas');
    }
}

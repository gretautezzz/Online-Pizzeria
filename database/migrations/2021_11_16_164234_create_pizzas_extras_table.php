<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas_extras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('extra_standart_id')->nullable();
            $table->unsignedBigInteger('extra_optional_id')->nullable();
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->foreign('extra_standart_id')->references('id')->on('extras');
            $table->foreign('extra_optional_id')->references('id')->on('extras');
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
        Schema::dropIfExists('pizzas_extras');
    }
}

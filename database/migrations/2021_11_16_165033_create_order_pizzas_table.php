<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('pizza_size_id');
            $table->unsignedBigInteger('order_pizza_extra_id');
            $table->unsignedSmallInteger('amount');
            $table->decimal('price',5,2)->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->foreign('pizza_size_id')->references('id')->on('pizza_sizes');
            $table->foreign('order_pizza_extra_id')->references('id')->on('order_pizza_extras');
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
        Schema::dropIfExists('order_pizzas');
    }
}

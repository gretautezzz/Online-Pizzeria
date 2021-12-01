<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_size_id');
            $table->string('photo', 255)->nullable();
            $table->smallInteger('weight')->unsigned();
            $table->decimal('price',4,2)->unsigned();
            $table->unsignedBigInteger('pizza_id');
            $table->foreign('pizza_size_id')->references('id')->on('pizza_sizes');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
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
        Schema::dropIfExists('pizza_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_cats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id')->unique();
            $table->foreign('cat_id')->references('id')->on('cats');
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
        Schema::dropIfExists('layout_cats');
    }
}

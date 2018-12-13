<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoryId');
            $table->unsignedInteger('artistId');
            $table->string('name');
            $table->datetime('date');
            $table->timestamps();


            $table->foreign('categoryId')->references('id')->on('categories')->onUpdate('cascade')->onDelete('Cascade');
            $table->foreign('artistId')->references('id')->on('artists')->onUpdate('cascade')->onDelete('Cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

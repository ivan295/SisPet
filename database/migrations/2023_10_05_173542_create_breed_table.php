<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breed', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('estado');
            $table->bigInteger('id_spice')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->foreign('id_spice')->references('id')->on('species_animal');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breed');
    }
}

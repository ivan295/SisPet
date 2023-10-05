<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('sexo');
            $table->string('color');
            $table->string('fecha_ingreso');
            $table->string('estado');
            $table->bigInteger('id_specie')->unsigned()->index()->nullable();
            $table->bigInteger('id_breed')->unsigned()->index()->nullable();
            $table->bigInteger('id_attention')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->foreign('id_specie')->references('id')->on('species_animal');            
            $table->foreign('id_breed')->references('id')->on('breed');            
            $table->foreign('id_attention')->references('id')->on('attention');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet');
    }
}

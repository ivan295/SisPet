<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attention', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_atencion');
            $table->float('peso');
            $table->float('altura');
            $table->string('estado');
            $table->string('tipo_atencion');
            $table->string('nombre_vacuna');
            $table->string('observacion');
            $table->bigInteger('id_attention')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->foreign('id_attention')->references('id')->on('veterinary');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attention');
    }
}

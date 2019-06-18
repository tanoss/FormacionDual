<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesinformesaprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesinformesaprendizaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idInformeAprendizaje');
            $table->string('descripcion');
            $table->string('tipo');
            //$table->timestamps();
            $table->string('horaIngreso');
            $table->string('horaSalida');
            $table->string('horaAlmuerzo');
            $table->string('horasTotales');
            $table->integer('prioridad');
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
        Schema::dropIfExists('actividadesinformesaprendizaje');
    }
}

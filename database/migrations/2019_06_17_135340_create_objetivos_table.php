<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idPlanMarcoFormacion');
            $table->string('descripcion');
            $table->integer('nivelLogroEsperado');
            $table->integer('nivelLogradoAlcanzado');
            $table->string('tareas');
            $table->string('puestoAprendizaje');
            $table->integer('semanasTrabajo');
            $table->integer('semana');
            $table->string('responsable');
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
        Schema::dropIfExists('objetivos');
    }
}

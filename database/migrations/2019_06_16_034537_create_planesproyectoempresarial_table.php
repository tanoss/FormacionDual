<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesproyectoempresarialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planesproyectoempresarial', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('idPlanMarcoFormacion');
            $table->string('titulo');
            $table->string('analisis');
            $table->string('objetivo');
            $table->string('descripcion');
            $table->string('indicador');
            $table->string('medicion');
            $table->string('meta');
            $table->string('fuenteDatos');
            $table->double('presupuesto');
            $table->string('beneficiosEsperados');
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
        Schema::dropIfExists('planesproyectoempresarial');
    }
}

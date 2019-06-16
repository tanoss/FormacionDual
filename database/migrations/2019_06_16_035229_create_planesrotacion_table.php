<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesrotacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planesrotacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idPlanMarcoFormacion');
            $table->foreign('idPlanMarcoFormacion')->references('id')->on('planesmarcoformacion');
            $table->string('conocimientosTeoricos');
            $table->string('conocimientosProcedimentales');
            $table->string('conocimientosActitudinales');
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
        Schema::dropIfExists('planesrotacion');
    }
}

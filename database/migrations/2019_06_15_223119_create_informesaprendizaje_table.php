<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesaprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informesaprendizaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('idPlanMarcoFormacion');
            $table->integer('semana');
            $table->double('calificacion');
            //$table->timestamps('fechaEntrega');
            $table->string('reflexion');
            $table->string('observaciones');
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
        Schema::dropIfExists('informesaprendizaje');
    }
}

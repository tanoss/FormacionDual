<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoslectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodoslectivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->tinyInteger('matriculable');
            $table->string('codigo');



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
        Schema::dropIfExists('periodoslectivos');
    }
}

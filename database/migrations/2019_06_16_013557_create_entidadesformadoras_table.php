<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesformadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidadesformadoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('naturaleza');
            $table->string('representanteLegal');
            $table->string('ruc');
            $table->string('actividadEconomica');
            $table->string('correo');
            $table->string('direccion');
            $table->string('telefono');
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
        Schema::dropIfExists('entidadesformadoras');
    }
}

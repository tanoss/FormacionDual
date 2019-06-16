<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosperfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosperfil', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('idPersona');
            $table->string('tipoArchivo');
            $table->string('nombreArchivo');
           // $table->longblob('adjunto');




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
        Schema::dropIfExists('fotosperfil');
    }
}

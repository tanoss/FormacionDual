<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingFrameworkPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_framework_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->integer('idSeguimineto');
           $table->foreign('idSeguimineto')->references('id')->on('follow');
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
        Schema::dropIfExists('training_framework_plans');
    }
}

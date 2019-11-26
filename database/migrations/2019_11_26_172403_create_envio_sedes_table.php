<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_sedes', function (Blueprint $table) {
            $table->bigIncrements('id_env_sede');
            $table->unsignedBigInteger('id_lab');
            $table->foreign('id_lab')->references('id_lab')->on('laboratorios')->onDelete('cascade');
            $table->unsignedBigInteger('id_sede');
            $table->foreign('id_sede')->references('id_sede')->on('sedes')->onDelete('cascade');
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
        Schema::dropIfExists('envio_sedes');
    }
}

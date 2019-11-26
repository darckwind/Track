<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->Increments('id_sede');
            $table->string('cod_sede');
            $table->string('direccion');
            $table->unsignedBigInteger('nombre_lab');
            $table->foreign('nombre_lab')->references('nombre_lab')->on('laboratorios')->onDelete('cascade');
            $table->string('run');
            $table->foreign('run')->references('run')->on('encargados')->onDelete('cascade');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('id_sede', 'cod_sede'));
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
        Schema::dropIfExists('sedes');
    }
}

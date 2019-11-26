<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->bigIncrements('id_centro');
            $table->string('cod_centro');
            $table->string('region');
            $table->string('comuna');
            $table->string('direccion');
            $table->string('run');
            $table->foreign('run')->references('run')->on('encargados')->onDelete('cascade');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('cascade');
            $table->primary(array('id_centro', 'cod_centro'));
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
        Schema::dropIfExists('centros');
    }
}

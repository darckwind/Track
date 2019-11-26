<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncargadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->string('run');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email');
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id_tipo')->on('tipos')->onDelete('cascade')->onUpdate('cascade');
            $table->primary('run');
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
        Schema::dropIfExists('encargados');
    }
}

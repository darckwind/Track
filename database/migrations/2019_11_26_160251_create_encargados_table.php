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
            $table->string('run_enc');
            $table->string('nombre_enc');
            $table->string('apellido_enc');
            $table->string('telefono_enc');
            $table->string('email_enc');
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id_tipo')->on('tipos')->onDelete('cascade');
            $table->primary('run_enc');
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

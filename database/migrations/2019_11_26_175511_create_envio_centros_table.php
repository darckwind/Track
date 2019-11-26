<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_centros', function (Blueprint $table) {
            $table->bigIncrements('id_env_cen');
            $table->unsignedBigInteger('id_sede');
            $table->foreign('id_sede')->references('id_sede')->on('sedes')->onDelete('cascade');
            $table->unsignedBigInteger('id_centro');
            $table->foreign('id_centro')->references('id_centro')->on('centros')->onDelete('cascade');
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
        Schema::dropIfExists('envio_centros');
    }
}

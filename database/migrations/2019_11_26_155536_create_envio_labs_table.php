<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_labs', function (Blueprint $table) {
            $table->bigIncrements('id_env_lab');
            $table->unsignedBigInteger('id_lab');
            $table->foreign('id_lab')->references('id_lab')->on('laboratorios')->onDelete('cascade');
            $table->unsignedBigInteger('id_item');
            $table->foreign('id_item')->references('id_item')->on('items')->onDelete('cascade');
            $table->integer('cantidad');
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
        Schema::dropIfExists('envio_labs');
    }
}

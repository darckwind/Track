<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->bigIncrements('id_lab');
            $table->string('nombre_lab');
            $table->string('direccion');
            $table->unsignedBigInteger('id_item');
            $table->foreign('id_item')->references('id_item')->on('items')->onDelete('cascade');
            $table->integer('cantidad');
            $table->primary(array('id_lab', 'nombre_lab'));
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
        Schema::dropIfExists('laboratorios');
    }
}

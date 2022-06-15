<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('esta_activo');
            $table->date('fecha_creado');
            $table->date('fecha_actualizado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_categorias');
    }
}

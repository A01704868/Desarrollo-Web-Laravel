<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosEventosReservansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_eventos_reservans', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_usuario')->constrained('usuarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_evento')->constrained('eventos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('asistencia');
            $table->string('codigo_qr');
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
        Schema::dropIfExists('usuarios_eventos_reservans');
    }
}

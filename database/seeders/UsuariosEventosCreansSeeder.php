<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosEventosCreansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios_eventos_creans')->insert([
            [
                'id' => 1,
                'id_usuario' => 1,
                'id_evento' => 1,
                'esta_activo' => 1,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'id_usuario' => 2,
                'id_evento' => 1,
                'esta_activo' => 1,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 3,
                'id_usuario' => 3,
                'id_evento' => 2,
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],

        ]);
    }
}

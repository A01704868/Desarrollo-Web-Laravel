<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos_categorias')->insert([
            [
                'id' => 1,
                'categoria_id' => 2,
                'evento_id' => 1,
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'categoria_id' => 7,
                'evento_id' => 2,
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 3,
                'categoria_id' => 7,
                'evento_id' => 1,
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
        ]);
    }
}

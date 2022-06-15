<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'id' => 1,
                'nombre' => 'Tecnologia',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'nombre' => 'Educacion',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 3,
                'nombre' => 'Finanzas',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 4,
                'nombre' => 'Medicina',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 5,
                'nombre' => 'Curso',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 6,
                'nombre' => 'Taller',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 7,
                'nombre' => 'Conferencia',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ]
        ]);
    }
}

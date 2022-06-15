<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'nombre' => 'Administrador',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'nombre' => 'Usuario',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ]
        ]);
    }
}

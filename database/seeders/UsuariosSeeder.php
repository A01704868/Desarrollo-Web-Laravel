<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'id' => 1,
                'id_rol' => 2,
                'nombre' => 'Sofía Soto',
                'correo_electronico' => 'sofo@gamil.com',
                'celular' => '4491038717',
                'estado' => 'Celaya',
                'edad' => 23,
                'empresa' => 'Tecnológico de Monterrey',
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'id_rol' => 2,
                'nombre' => 'Claudio Soto',
                'correo_electronico' => 'claudio@gamil.com',
                'celular' => '4611233970',
                'estado' => 'CDMX',
                'edad' => 25,
                'empresa' => 'QualiTEST',
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 3,
                'id_rol' => 2,
                'nombre' => 'Eduardo Larios',
                'correo_electronico' => 'Larios@gamil.com',
                'celular' => '4613920983',
                'estado' => 'León',
                'edad' => 27,
                'empresa' => 'Microsoft',
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'id' => 1,
                'nombre_organizador' => 'Alex',
                'celular_organizador' => '123456789',
                'nombre_evento' => 'Viaje a la Luna',
                'imagen' => 'https://estaticos-cdn.elperiodico.com/clip/602ae0ef-8306-4955-ad3d-1bedb93c54ae_alta-libre-aspect-ratio_default_0.jpg',
                'fecha_evento' => '13/06/22',
                'hora_inicio' => '13:00',
                'hora_final' => '17:00',
                'descripcion' => 'Hoy vamos a la luna',
                'direccion' => 'Kennedy Space Center',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ],
            [
                'id' => 2,
                'nombre_organizador' => 'Daniel',
                'celular_organizador' => '987654321',
                'nombre_evento' => 'Viaje a Marte',
                'imagen' => 'https://www.eluniverso.com/resizer/dsAA2rsRfMgSaEidbdH_sXxTXDI=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/I5EMSOOGHZHKDFLFK7HIUHQD7Y.jpg',
                'fecha_evento' => '13/06/22',
                'hora_inicio' => '9:00',
                'hora_final' => '12:00',
                'descripcion' => 'Hoy vamos a Marte',
                'direccion' => 'Kennedy Space Elon Musk',
                'esta_activo' => true,
                'fecha_creado' => date('Y-m-d'),
                'fecha_actualizado' => date('Y-m-d')
            ]
        ]);
    }
}

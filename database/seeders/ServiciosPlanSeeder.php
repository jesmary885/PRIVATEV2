<?php

namespace Database\Seeders;

use App\Models\ServiciosPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiciosPlan::create([
            'plan_id' => '2',
            'servicio' => 'Todo mi contenido de desnudo',
            'titulo' => 'Contenido'
        ]);

        ServiciosPlan::create([
            'plan_id' => '2',
            'servicio' => 'Chat privado conmigo',
            'titulo' => 'Chat'
        ]);
        ServiciosPlan::create([
            'plan_id' => '2',
            'servicio' => 'Encarga contenido personalizado',
            'titulo' => 'Solicitudes'
        ]);

        ServiciosPlan::create([
            'plan_id' => '3',
            'servicio' => 'Todo mi contenido de pies',
            'titulo' => 'Contenido'
        ]);

        ServiciosPlan::create([
            'plan_id' => '3',
            'servicio' => 'Encarga contenido personalizado',
            'titulo' => 'Solicitudes'
        ]);

        ServiciosPlan::create([
            'plan_id' => '1',
            'servicio' => 'Todo mi contenido subido en la plataforma',
            'titulo' => 'Contenido'
        ]);

        ServiciosPlan::create([
            'plan_id' => '1',
            'servicio' => 'Chat privado conmigo',
            'titulo' => 'Chat'
        ]);


        ServiciosPlan::create([
            'plan_id' => '1',
            'servicio' => 'Videos en vivo conmigo',
            'titulo' => 'Videos'
        ]);

        ServiciosPlan::create([
            'plan_id' => '1',
            'servicio' => 'Encarga contenido personalizado',
            'titulo' => 'Solicitudes'
        ]);
    }
}

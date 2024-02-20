<?php

namespace Database\Seeders;

use App\Models\Creador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Creador::create([
            'user_id' => '2',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario1.jpg',
            'estado' => 'activo'
        ]);

        Creador::create([
            'user_id' => '3',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario2.jpg',
            'estado' => 'activo'
        ]);
        Creador::create([
            'user_id' => '4',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario3.jpg',
            'estado' => 'activo'
        ]);
        Creador::create([
            'user_id' => '5',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario4.jpg',
            'estado' => 'activo'
        ]);
        Creador::create([
            'user_id' => '6',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario5.jpg',
            'estado' => 'activo'
        ]);
    }
}

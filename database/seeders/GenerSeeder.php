<?php

namespace Database\Seeders;

use App\Models\Gener;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gener::create([
            'name' => 'Hombre',
        ]);

        Gener::create([
            'name' => 'Mujer',
        ]);

        Gener::create([
            'name' => 'Transexual',
        ]);
        
    }
}

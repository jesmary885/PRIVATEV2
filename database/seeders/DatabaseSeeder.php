<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(GenerSeeder::class);

        $this->call(CreadorSeeder::class);

        $this->call(CategoriasSeeder::class);

        $this->call(PlanSeeder::class);

        $this->call(ServiciosPlanSeeder::class);

    }
}

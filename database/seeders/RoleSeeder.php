<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Fan']);
        $role3 = Role::create(['name' => 'Creador']);
        $role4 = Role::create(['name' => 'Creador Elite']);
        $role5 = Role::create(['name' => 'Inactivo']);


       Permission::create(['name' => 'web',
        'description' => 'Ver web'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'menu.admin',
        'description' => 'Ver menu admin'])->syncRoles([$role1]);

    }
}

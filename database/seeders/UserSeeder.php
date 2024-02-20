<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Administrdor',
            'name' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'adminjesmary@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 0,
            'codigo_referido' => 'ps0000000000022',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!'

        ])->assignRole('Administrador');

        User::create([
            'username' => 'User1 Prueba',
            'name' => 'User1',
            'lastname' => 'Prueba',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!'

        ])->assignRole('Creador Elite');

        User::create([
            'username' => 'User Administrador',
            'name' => 'User Admin',
            'lastname' => 'Prueba',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('Creador Elite');

        User::create([
            'username' => 'User3 Prueba',
            'name' => 'User3',
            'lastname' => 'Prueba',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',


        ])->assignRole('creador');

        User::create([
            'username' => 'User4 Prueba',
            'name' => 'User4',
            'lastname' => 'Prueba',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('creador');

        User::create([
            'username' => 'User5 Prueba',
            'name' => 'User5',
            'lastname' => 'Prueba',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('creador');

        User::create([
            'username' => 'User6 Prueba',
            'name' => 'User6',
            'lastname' => 'Prueba',
            'email' => 'user6@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('fan');

        User::create([
            'username' => 'User7 Prueba',
            'name' => 'User7',
            'lastname' => 'Prueba',
            'email' => 'user7@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('fan');

        User::create([
            'username' => 'User8 Prueba',
            'name' => 'User8',
            'lastname' => 'Prueba',
            'email' => 'user8@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('fan');

        User::create([
            'username' => 'User9 Prueba',
            'name' => 'User9',
            'lastname' => 'Prueba',
            'email' => 'user9@gmail.com',
            'password' => bcrypt('12345678'),
            'estado' => 'activo',
            'balance' => 100,
            'codigo_referido' => 'ps00000000000001',
            'biografia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam laboriosam pariatur inventore eligendi? Ipsum, necessitatibus? Vero deleniti necessitatibus fugiat vel explicabo temporibus dolorum reprehenderit modi eaque illo, excepturi amet!',

        ])->assignRole('fan');


    }
}

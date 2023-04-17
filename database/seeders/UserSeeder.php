<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

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

            'name' => 'Miguel Ocaña',
            'email' => 'miguelo@gmail.com',
            'password' => bcrypt('miguel12345')
        ])->assignRole('Administrador');

        User::create([

            'name' => 'Sujaile Diaz',
            'email' => 'sujailed@gmail.com',
            'password' => bcrypt('sujad89417')
        ])->assignRole('Tecnico');

        User::create([

            'name' => 'Harumi Espinoza',
            'email' => 'harukie@gmail.com',
            'password' => bcrypt('haru45689')
        ])->assignRole('Cliente');
    }
}

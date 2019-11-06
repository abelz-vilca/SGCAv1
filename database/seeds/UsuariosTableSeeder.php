<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
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
                'nombres' => 'nombre1', 'apellido_paterno' => 'apellidopaterno', 'apellido_materno' => 'apellido materno',
                'dni' => '42452510', 'email' => '00000001@hotmail.com', 'password' => bcrypt('00000001'), 'rol' => 'admin', 'programa_id' => '1',
            ]

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([
            [
                'nombre_especialidad' => 'Ingles y Lengua Española',
                'CUI' => '170800487',
                'programa_id' => '8'
            ],


            [
                'nombre_especialidad' => 'Matemática Física e Informática',
                'CUI' => '170800486',
                'programa_id' => '8'
            ],


            [
                'nombre_especialidad' => 'Ciencias Sociales y Filosofia con mención en Turismo',
                'CUI' => '170800485',
                'programa_id' => '8'
            ],


            [
                'nombre_especialidad' => 'Lengua Española y Literatura con mención en comunicación',
                'CUI' => '170800484',
                'programa_id' => '8'
            ],


            [
                'nombre_especialidad' => 'Estadística',
                'CUI' => '170800476',
                'programa_id' => '21'
            ],


            [
                'nombre_especialidad' => 'Matemática',
                'CUI' => '170800475',
                'programa_id' => '21'
            ],

            [
                'nombre_especialidad' => 'Matemática',
                'CUI' => '170800474',
                'programa_id' => '21'
            ]

        ]);
    }
}

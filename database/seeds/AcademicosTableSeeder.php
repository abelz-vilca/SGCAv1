<?php

use Illuminate\Database\Seeder;

class AcademicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $array = array(
            'Departamento Académico de Matemática y Física',
            'Departamento Académico de Literatura',
            'Departamento Académico de Biologia',
            'Departamento Académico de Lenguaje',
            'Departamento Académico de Contabilidad',
            'Departamento Académico de Economía',
            'Departamento Académico de Administración',
            'Departamento Académico de Educación Física',
            'Departamento Académico de Farmacia',
            'Departamento Académico de Medicina',
            'Departamento Académico de Enfermería',
            'Departamento Académico de Obstetricia',
            'Departamento Académico de Derecho',
            'Departamento Académico de Ciencias Políticas'

        );
        for ($i = 0; $i < count($array); $i++) {
            DB::table('academicos')->insert([
                'facultad_id' => '1',
                'nombre_academico' => $array[$i]

            ]);
    }
}}

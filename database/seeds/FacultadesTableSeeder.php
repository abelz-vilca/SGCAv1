<?php

use Illuminate\Database\Seeder;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            'FACULTAD DE CIENCIAS AGRARIAS',
            'FACULTAD DE CIENCIAS BIOLÓGICAS',
            'FACULTAD DE CIENCIAS DE LA EDUCACIÓN',
            'FACULTAD DE CIENCIAS ECONÓMICAS ADMINISTRATIVAS Y CONTABLES',
            'FACULTAD DE CIENCIAS SOCIALES',
            'FACULTAD DE DERECHO Y CIENCIAS PÓLITICAS',
            'FACULTAD DE INGENIERÍA DE MINAS, GEOLOGÍA Y CIVIL',
            'FACULTAD DE INGENIERÍA QUÍMICA Y METALÚRGIA',
            'FACULTAD DE CIENCIAS DE LA SALUD',

        );

        for ($i = 0; $i < count($array); $i++) {
            DB::table('facultades')->insert([
                'nombre_facultad' => $array[$i],
                'universidad_id' => '1'
            ]);
        }
    }
}

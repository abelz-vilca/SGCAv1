<?php

use App\Dimension;
use Illuminate\Database\Seeder;

class DimensionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Dimension::truncate();
        Dimension::create([
            'nombre_dimension' =>'DIMENSION 1: GESTIÓN ESTRATÉGICA'
        ]);*/

        $array = array(
            'DIMENSION 1: GESTIÓN ESTRATÉGICA',
            'DIMENSION 2: FORMACIÓN INTEGRAL',
            'DIMENSION 3: SOPORTE INSTITUCIONAL',
            'DIMENSION 4: RESULTADOS'
        );
        for ($i = 0; $i < count($array); $i++) {
            DB::table('dimensiones')->insert([
                'nombre_dimension' => $array[$i],
            ]);
        }

        /*Dimension::truncate();
        
        for ($i=0; $i<count($array); $i++) { 
            $array = array('DIMENSION 1: GESTIÓN ESTRATÉGICA',
            'DIMENSION 2: FORMACIÓN INTEGRAL',
            'DIMENSION 3: SOPORTE INSTITUCIONAL',
            'DIMENSION 4: RESULTADOS');
            Dimension::create([               
                DB::table('dimensiones')->insert([
                    'nombre_dimension' => $array[$i],
            ]);
        }*/
    }
}

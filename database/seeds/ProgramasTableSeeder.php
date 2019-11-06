<?php

use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            [
                'nombre_programa' => 'INGENIERÍA AGRONOMÍA',
                'CUI' => '170800468',
                'academico_id' => '1',
                'facultad_id' => '1'
            ],

            [
                'nombre_programa' => 'INGENIERÍA AGRÍCOLA',
                'CUI' => '170800492',
                'academico_id' => '1',
                'facultad_id' => '1'
            ],

            [
                'nombre_programa' => 'INGENIERÍA AGROFORESTAL',
                'CUI' => '170800490',
                'academico_id' => '1',
                'facultad_id' => '1'
            ],

            [
                'nombre_programa' => 'MEDICINA VETERINARIA',
                'CUI' => '170800491',
                'academico_id' => '1',
                'facultad_id' => '1'
            ], //1

            [
                'nombre_programa' => 'ESCUELA PROFESIONAL DE BIOLOGÍA',
                'CUI' => '1',
                'academico_id' => '1',
                'facultad_id' => '2'
            ], //2

            [
                'nombre_programa' => 'EDUCACIÓN INICIAL',
                'CUI' => '170800489',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],
            [
                'nombre_programa' => 'EDUCACIÓN PRIMARIA',
                'CUI' => '170800488',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],

//Especilidades de EDUCACACION SECUNDARIA

            [
                'nombre_programa' => 'EDUCACIÓN SECUNDARIA-Ingles y Lengua Española',
                'CUI' => '170800487',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],

            [
                'nombre_programa' => 'EDUCACIÓN SECUNDARIA-Matemática Física e Informática',
                'CUI' => '170800486',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],
            
            [
                'nombre_programa' => 'EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo',
                'CUI' => '170800485',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],
            
            [
                'nombre_programa' => 'EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación',
                'CUI' => '170800484',
                'academico_id' => '1',
                'facultad_id' => '3'
            ],
//FIIN DE ESPECILAIDADES DE SECUNDARIA

            [
                'nombre_programa' => 'EDUCACIÓN FÍSICA',
                'CUI' => '170800483',
                'academico_id' => '1',
                'facultad_id' => '3'
            ], //3

            [
                'nombre_programa' => 'ADMINISTRACIÓN DE EMPRESAS',
                'CUI' => '180800901',
                'academico_id' => '1',
                'facultad_id' => '4'
            ],
            [
                'nombre_programa' => 'CONTABILIDAD Y AUDITORÍA',
                'CUI' => '170800482',
                'academico_id' => '1',
                'facultad_id' => '4'
            ],
            [
                'nombre_programa' => 'ECONOMÍA',
                'CUI' => '170800481',
                'academico_id' => '1',
                'facultad_id' => '4'
            ], //4

            [
                'nombre_programa' => 'CIENCIAS DE LA COMUNICACIÓN',
                'CUI' => '3',
                'academico_id' => '1',
                'facultad_id' => '5'
            ],
            [
                'nombre_programa' => 'CIENCIAS DE ARQUEOLOGÍA E HISTORIA',
                'CUI' => '180800907',
                'academico_id' => '1',
                'facultad_id' => '5'
            ],
            [
                'nombre_programa' => 'CIENCIAS DE ANTROPOLOGÍA SOCIAL',
                'CUI' => '180800186',
                'academico_id' => '1',
                'facultad_id' => '5'
            ],
            [
                'nombre_programa' => 'CIENCIAS DE TRABAJO SOCIAL',
                'CUI' => '170800480',
                'academico_id' => '1',
                'facultad_id' => '5'
            ],

            [
                'nombre_programa' => 'DERECHO',
                'CUI' => '170800479',
                'academico_id' => '1',
                'facultad_id' => '6'
            ],

            [
                'nombre_programa' => 'INGENIERÍA CIVIL',
                'CUI' => '170800477',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],
            [
                'nombre_programa' => 'INGENIERÍA DE MINAS',
                'CUI' => '170800478',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],
            [
                'nombre_programa' => 'INGENIERÍA DE SISTEMAS',
                'CUI' => '170800473',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],

            //especilidades de CIENCIAS FÍSICO MATEMÁTICAS
            // [
            //     'nombre_programa' => 'CIENCIAS FÍSICO MATEMÁTICAS',
            //     'CUI' => '4',
            //     'academico_id' => '1',
            //     'facultad_id' => '7'
            // ],
            [
                'nombre_programa' => 'CIENCIAS FÍSICO MATEMÁTICAS-Estadistica',
                'CUI' => '170800476',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],
            [
                'nombre_programa' => 'CIENCIAS FÍSICO MATEMÁTICAS-Matemática',
                'CUI' => '170800475',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],
            [
                'nombre_programa' => 'CIENCIAS FÍSICO MATEMÁTICAS-Física',
                'CUI' => '170800474',
                'academico_id' => '1',
                'facultad_id' => '7'
            ],
// FIN DE ESPECILIDAD DE MATEMATICA

            [
                'nombre_programa' => 'INGENIERÍA QUÍMICA',
                'CUI' => '170800472',
                'academico_id' => '1',
                'facultad_id' => '8'
            ],
            [
                'nombre_programa' => 'INGENIERÍA EN INDUSTRIAS ALIMENTARIAS',
                'CUI' => '170800471',
                'academico_id' => '1',
                'facultad_id' => '8'
            ],
            [
                'nombre_programa' => 'INGENIERÍA AGROINDUSTRIAL',
                'CUI' => '170800469',
                'academico_id' => '1',
                'facultad_id' => '8'
            ],

            [
                'nombre_programa' => 'MEDICINA HUMANA',
                'CUI' => '5',
                'academico_id' => '1',
                'facultad_id' => '9'
            ],
            [
                'nombre_programa' => 'FARMACIA Y BIOQUÍMICA',
                'CUI' => '170800494',
                'academico_id' => '1',
                'facultad_id' => '9'
            ],
            [
                'nombre_programa' => 'OBSTETRICIA',
                'CUI' => '170800493',
                'academico_id' => '1',
                'facultad_id' => '9'
            ],
            [
                'nombre_programa' => 'ENFERMERÍA',
                'CUI' => '170800470',
                'academico_id' => '1',
                'facultad_id' => '9'
            ]

        ]);
    }
}

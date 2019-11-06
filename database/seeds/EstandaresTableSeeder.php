<?php

use Illuminate\Database\Seeder;
use App\Estandar;

class EstandaresTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $array = array(
         'E1:Propósitos articulados',
         'E2:Participación de los grupos de interés',
         'E3:Revisión periódica y participativa de las políticas y objetivos',
         'E4:Sostenibilidad',

         'E5:Pertinencia del perfil de egreso',
         'E6:Revisión del perfil de egreso',

         'E7:Sistema de gestión de la calidad (SGC)',
         'E8:Planes de mejora',

         'E9:Plan de estudios',
         'E10:Características del plan de estudios',
         'E11:Enfoque por competencias',
         'E12:Articulación con I+D+i y responsabilidad social',
         'E13:Movilidad',

         'E14:Selección, evaluación, capacitación y perfeccionamiento',
         'E15:Plana docente adecuada',
         'E16:Reconocimiento de las actividades de labor docentes',
         'E17:Plan de desarrollo académico del docente',

         'E18:Admisión al programa de estudios',
         'E19:Nivelación de ingresantes',
         'E20:Seguimiento al desempeño de los estudiantes',
         'E21:Actividades extracurriculares',

         'E22:Gestión y calidad de la I+D+i realizada por docentes',
         'E23:I+D+i para la obtención del grado y el título',
         'E24:Publicaciones de los resultados de I+D+i',

         'E25:Responsabilidad social',
         'E26:Implementación de políticas ambientales',

         'E27:Bienestar',

         'E28:Equipamiento y uso de la infraestructura',
         'E29:Mantenimiento de la infraestructura',
         'E30:Sistema de información y comunicación',
         'E31:Centros de información y referencia',

         'E32:Recursos humanos para la gestión del programa de estudios',

         'E33:Logro de competencias',
         'E34:Seguimiento a egresados y objetivos educacionales'
      );

      for ($i = 1; $i <= 4; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "1",
         ]);
      }
      for ($i = 5; $i <= 6; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "2",
         ]);
      }
      for ($i = 7; $i <= 8; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "3",
         ]);
      }
      for ($i = 9; $i <= 13; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "4",
         ]);
      }
      for ($i = 14; $i <= 17; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "5",
         ]);
      }
      for ($i = 18; $i <= 21; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "6",
         ]);
      }
      for ($i = 22; $i <= 24; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "7",
         ]);
      }

      for ($i = 25; $i <= 26; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "8",
         ]);
      }

      for ($i = 27; $i <= 27; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "9",
         ]);
      }
      for ($i = 28; $i <= 31; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "10",
         ]);
      }
      for ($i = 32; $i <= 32; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "11",
         ]);
      }
      for ($i = 33; $i <= 34; $i++) {
         DB::table('estandares')->insert([
            'nombre_estandar' => $array[$i - 1],
            'factor_id' => "12",
         ]);
      }
   }
}

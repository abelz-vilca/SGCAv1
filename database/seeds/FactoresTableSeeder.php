<?php

use Illuminate\Database\Seeder;
use App\Factor;

class FactoresTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $array = array(
      'F1:PLANIFICACION DEL PROGRAMA DE ESTUDIOS ',
      'F2:ESTION DEL PERFIL DE EGRESO',
      'F3:ASEGURAMIENTO DE LA CALIDAD',

      'F4:PROCESO ENSEÑANZA APRENDIZAJE',
      'F5:GESTION DE LOS DOCENTES',
      'F6:SEGUIMIENTO A ESTUDIANTES',
      'F7:NVESTIGACION, DESARROLLO TECNOLÓGICO E INNOVACIÓN',
      'F8:RESPONSABILIDAD SOCIAL UNIVERSITARIA',

      'F9:SERVICIOS DEBIENESTAR',
      'F10:INFRAESTRUCTURA Y SOPORTE',
      'F11:RECURSOS HUMANOS',

      'F12:VERIFICACION DEL PERFIL DE EGRESO'
    );

    for ($i = 1; $i <= 3; $i++) {
      DB::table('factores')->insert([
        'nombre_factor' => $array[$i - 1],
        'dimension_id' => "1",
      ]);
    }
    for ($i = 4; $i <= 8; $i++) {
      DB::table('factores')->insert([
        'nombre_factor' => $array[$i - 1],
        'dimension_id' => "2",
      ]);
    }
    for ($i = 9; $i <= 11; $i++) {
      DB::table('factores')->insert([
        'nombre_factor' => $array[$i - 1],
        'dimension_id' => "3",
      ]);
    }
    for ($i = 12; $i <= 12; $i++) {
      DB::table('factores')->insert([
        'nombre_factor' => $array[$i - 1],
        'dimension_id' => "4",
      ]);
    }
  }
}

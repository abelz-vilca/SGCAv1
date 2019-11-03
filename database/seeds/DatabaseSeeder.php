<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DimensionesTableSeeder::class,
            FactoresTableSeeder::class,
            EstandaresTableSeeder::class,
            RegionesTableSeeder::class,
            UniversidadesTableSeeder::class,
            FacultadesTableSeeder::class,
            AcademicosTableSeeder::class,
            ProgramasTableSeeder::class,
            EspecialidadesTableSeeder::class,
            UsersTableSeeder::class,
            Estandar_programaTableSeeder::class
            //DocentesTableSeeder::class,
        ]);
    }
}

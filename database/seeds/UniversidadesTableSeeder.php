<?php

use Illuminate\Database\Seeder;

class UniversidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universidades')->insert([
            [
                'nombre_universidad' => 'UNSCH', 'direccion_universidad' => 'AV UNIVERSITARIA S/N MODULOS', 'telefono' => '96535924',
                'region_id' => '5',
            ]

        ]);
    }
}

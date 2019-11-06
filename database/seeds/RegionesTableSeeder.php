<?php

use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            'AMAZONAS',
            'ÁNCASH',
            'APURÍMAC',
            'AREQUIPA',
            'AYACUCHO',
            'CAJAMARCA',
            'CALLAO',
            'CUSCO',
            'HUANCAVELICA',
            'HUÁNUCO',
            'ICA',
            'JUNÍN',
            'LA LIBERTAD',
            'LAMBAYEQUE',
            'LIMA',
            'LORETO',
            'MADRE DE DIOS',
            'MOQUEGUA',
            'PASCO',
            'PIURA',
            'PUNO',
            'SAN MARTÍN',
            'TACNA',
            'TUMBES',
            'UCAYALI'
        );
        for ($i = 0; $i < count($array); $i++) {
            DB::table('regiones')->insert([
                'nombre_region' => $array[$i],
            ]);
        }
    }
}

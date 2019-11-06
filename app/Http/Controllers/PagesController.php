<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function inicio()
    {
        return view('acreditacion');
    }

    public function reporte()
    {
        return view('reportes.reporteprogramas');
    }
    public function sumas($id)
    {
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();

        $categorias = App\EstandarPrograma::where('programa_id', $id)->get()->sum('calificacion');

        $factor1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 4))->get()->sum('calificacion');

        $factor2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(5, 6))->get()->sum('calificacion');

        $factor3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(7, 8))->get()->sum('calificacion');

        $factor4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 13))->get()->sum('calificacion');

        $factor5 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(14, 17))->get()->sum('calificacion');

        $factor6 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(18, 21))->get()->sum('calificacion');

        $factor7 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(22, 24))->get()->sum('calificacion');

        $factor8 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(25, 26))->get()->sum('calificacion');

        $factor9 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 27))->get()->sum('calificacion');

        $factor10 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(28, 31))->get()->sum('calificacion');

        $factor11 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(32, 32))->get()->sum('calificacion');

        $factor12 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        $dimension01 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        $dimension02 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 26))->get()->sum('calificacion');
        $dimension03 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 32))->get()->sum('calificacion');
        $dimension04 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        return view('sumaesatandar', compact(
            'programas',
            'estandarprograma',
            'categorias',
            'factor1',
            'factor2',
            'factor3',
            'factor4',
            'factor5',
            'factor6',
            'factor7',
            'factor8',
            'factor9',
            'factor10',
            'factor11',
            'factor12',
            'dimension01',
            'dimension02',
            'dimension03',
            'dimension04'
        ));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use carbon\Carbon;
use Illuminate\Http\Request;
use App\Estandar;
use App;

class EstandarProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function devolverprograma($programa_id)
    {
        // $devolverisprograma = App\EstandarPrograma::findOrFail($programa_id);
        $devolverisprograma = App\EstandarPrograma::where('programa_id', $programa_id)->get();
        $estandarprograma = App\EstandarPrograma::where('programa_id', 1)->get();
        return view('estandar_programa', compact('devolverisprograma', 'estandarprograma'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function editar($id)
    {
        $devolverisprograma = App\EstandarPrograma::findOrFail($id);

        return view('programas.editar', compact('devolverisprograma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function updates(Request $request, $id)

    {

        $request->validate([
            'link' => 'required',
            'calificacion' => 'required'
        ]);
        $notaupdate = App\EstandarPrograma::findOrFail($id);
        $notaupdate->link = $request->link;
        $notaupdate->calificacion = $request->calificacion;
        $notaupdate->fecha = Carbon::now();

        $notaupdate->save();
        return back()->with('mensaje', 'Calificacion actualizada');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

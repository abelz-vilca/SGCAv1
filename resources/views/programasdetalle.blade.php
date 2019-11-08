@extends('layouts.plantilla')

@section('name')

<div  align="center">

    <h1>CALIFICACION DE ESTANDARES</h1>
    
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h4>PROGRAMA SELECCIONADO</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->nombre_programa}}"></p>
        </div>
        {{-- <div class="col-sm-4">
            <h4 class="fas fa-align-right">ID</h4>
            <p><input class="form-control" type="text" name="fecha" value="{{$programas->id}}"></p>
        </div> --}}
        <div class="col-sm-4">
            <h4>Código Unico de Identificacion</h4>
            <p><input  disabled="disabled"  class="form-control" type="text" name="fecha" value="{{$programas->CUI}}"></p>
        </div>
    </div>
    <table class="table table-bordered table-info" align="center">
        <thead class="table table-striped">
            <tr class="bg-success" align="center">
                <th>#ID</th>
                <th>Link del Archivo</th>
                <th>Calificación</th>
                <th>Fecha de Modificación</th>
                <th>Estandar</th>
                {{-- <th>P</th> --}}
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estandarprograma as $item )

            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->link}}</td>
                <td  align="center">{{$item->calificacion}}</td>
                <td  align="center">{{$item->fecha}}</td>
                <td  align="center">{{$item->estandar_id}}</td>
                {{-- <td>{{$item->programa_id}}</td> --}}
                <td>
                        <a href="{{route('programas.editar', $item)}}" type="button" class="btn btn-primary">Calificar Estandar</a>
                    <a href="" class="btn btn-warning pull-right" data-toggle="modal" data-target="#create">Ver</a>
                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                </td>
               

            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
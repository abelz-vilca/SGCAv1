@extends('layouts.plantilla')
@section('name')
<div class="jumbotron text-center">
    <h1>Página de Programas</h1>
    <p>PROGRAMAS</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h4>PROGRAMA SELECCIONADO</h4>
            <p><input class="form-control" type="text" name="fecha" value="{{$programas->nombre_programa}}"></p>
        </div>
        <div class="col-sm-4">
            <h4 class="fas fa-align-right">ID</h4>
            <p><input class="form-control" type="text" name="fecha" value="{{$programas->id}}"></p>
        </div>
        <div class="col-sm-4">
            <h4>Código Unico de Identificacion</h4>
            <p><input class="form-control" type="text" name="fecha" value="{{$programas->CUI}}"></p>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>LINK DEL ARCHIVO</th>
                <th>calificacion</th>
                <th>FECHA</th>
                <th>ESTANDAR</th>
                <th>PROGRAMA</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estandarprograma as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>
                    <a href="{{$item->link}}" target="_blank">ABRIR LINK DEL ARCHIVO</a>
                    {{-- <a href="{{$item->link}}" target="_blank">{{$item->link}}</a> --}}
                    {{-- <a href="{{route('linkarchivo', $item->id)}}">{{$item->link}}</a> --}}
                </td>
                <td>{{$item->calificacion}}</td>
                <td>{{$item->fecha}}</td>
                <td>{{$item->estandar_id}}</td>
                <td>{{$item->programa_id}}</td>
                <td>
                    <a href="" type="button" class="btn btn-primary">VER
                        PUNTAJE</a>
                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                </td>
            </tr>

            @endforeach()
        </tbody>
    </table>
</div>
@endsection
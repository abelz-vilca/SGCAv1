@extends('layouts.plantilla')
@section('name')
<div class="container-my-4">

    <h1 class="bg-primary">Selecciones su programa de estudios </h1>
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table" align="center">
        <thead class="table table-striped">
            <tr class="bg-primary">
                <th scope="col">#ID</th>
                <th scope="col">PROGRAMAS</th>
                <th scope="col">Código Único de Identifación</th>

                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($programas as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre_programa}}</td>
                <td>{{$item->CUI}}</td>

                <td>
                    <a href="{{route('listardetalles', $item)}}" type="button" class="btn btn-success">VER
                        DOCUMENTO</a>
                    {{-- <a href="{{route('programas', $item)}}" ype="button" class="btn btn-primary">DUCUMENTAR</a>
                    --}}
                    <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-warning">VER
                        CALIFICACION</a>
                </td>

            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.plantilla')
@section('name')
<div align="center" class="container-my-2">
    {{-- <a type="button" class="btn btn-success">SELECCIONAR PROGRAMA DE ESTUDIOS</a> --}}
    <h1  align="center">SELECCIONAR PROGRAMA DE ESTUDIOS</h1>
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-bordered table-info" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-danger">
                <th scope="col">#ID</th>
                <th scope="col">PROGRAMAS</th>
                <th scope="col">CUI</th>

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
                    <a href="{{route('listardetalles', $item)}}" type="button" class="btn btn-danger">VER
                        DOCUMENTO</a>
                    {{-- <a href="{{route('programas', $item)}}" ype="button" class="btn btn-primary">DUCUMENTAR</a>
                    --}}
                    {{-- <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-warning">VER
                    CALIFICACION</a> --}}
                    <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-info">REPORTE NUM</a>
                    <a href="{{route('graficofactor',$item)}}" type="button" class="btn btn-secondary"> FACTORES </a>
                    <a href="{{route('graficodimension',$item)}}" type="button" class="btn btn-warning">DIMENSIONES </a>
                    <a href="{{route('graficocaed',$item)}}" type="button" class="btn btn-secondary">ED</a>
                </td>


            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
@endsection()
@extends('layouts.plantilla')
@section('name')
<!doctype html>
<html lang="en">

<body>
    <div class="jumbotron text-center">

        <h1>CALIFICACION DE ESTANDARES</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>PROGRAMA SELECCIONADO</h4>
                    <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                            value="{{$programas->nombre_programa}}"></p>
                </div>
                {{-- <div class="col-sm-4">
                    <h4 class="fas fa-align-right">id</h4>
                    <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                            value="{{$programas->id}}"></p>
                </div> --}}
                <div class="col-sm-4">
                    <h4>Código Unico de Identificacion</h4>
                    <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                            value="{{$programas->CUI}}"></p>
                </div>
            </div>
        </DIV>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered table-info" align="center">
                        <thead class="table table-striped">
                            <tr>
                                <th>#id</th>
                                <th>Calificacion</th>
                                <th>Fecha</th>
                                {{-- <th>Acciones</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estandarprograma as $item )
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->calificacion}}</td>
                                <td>{{$item->fecha}}</td>
                                {{-- <td>
                                    <a disabled="disabled" href="" type="button" class="btn btn-info">Información</a>
                                    </td> --}}
                                
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <div class="p-3 mb-2 bg-warning text-dark" class="col-sm-10">
                        <h4>Programa de estudios</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$programas->nombre_programa}}"></p>
                        <h4>Calificacion total Programa:</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$categorias}}"></p>
                        <h4>FACTOR 01</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor1}}">
                        </p>

                        <h4>FACTOR 02</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor2}}">
                        </p>

                        <h4>FACTOR 03</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor3}}">
                        </p>

                        <h4>FACTOR 04</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor4}}">
                        </p>

                        <h4>FACTOR 05</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor5}}">
                        </p>

                        <h4>FACTOR 06</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor6}}">
                        </p>

                        <h4>FACTOR 07</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor7}}">
                        </p>

                        <h4>FACTOR 08</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor8}}">
                        </p>

                        <h4>FACTOR 09</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor9}}">
                        </p>

                        <h4>FACTOR 10</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor10}}">
                        </p>

                        <h4>FACTOR 11</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor11}}">
                        </p>

                        <h4>FACTOR 12</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$factor12}}">
                        </p>
                        <h4>DIMENSION 01</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$dimension01}}">
                        </p>
                        <h4>DIMENSION 02</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$dimension02}}">
                        </p>
                        <h4>DIMENSION 03</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$dimension03}}">
                        </p>
                        <h4>DIMENSION 04</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$dimension04}}">
                        </p>


                    </div>
                </div>
            </div>

        </div>
      @endsection
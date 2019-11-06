@extends('layouts.plantilla')

@section('name')

        <div >
    
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
                    <tr align="center">
                        <th>#ID</th>
                        <th>Link del Archivo</th>
                        <th>calificación</th>
                        <th>Fecha de Modificación</th>
                        <th>E</th>
                        <th>P</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estandarprograma as $item )
    
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->link}}</td>
                        <td>{{$item->calificacion}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->estandar_id}}</td>
                        <td>{{$item->programa_id}}</td>
                        <td>
                            <a href="" class="btn btn-warning pull-right" data-toggle="modal"
                                data-target="#create">EDITAR</a>
                            {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                        </td>
                        <td>
                            <a href="" type="button" class="btn btn-primary">CALIFICAR
                                E</a>
                            {{-- <button type="button" class="btn btn-warning">CALIFICAR</button></td> --}}
                        </td>
    
                    </tr>
    
                    @endforeach
                </tbody>
            </table>
        </div>
              
  @endsection
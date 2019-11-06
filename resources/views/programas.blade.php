@extends('layouts.plantilla')

@section('name')
<div  align="center" class="container-my-4">


        <a  type="button" class="btn btn-success">SELECCIONE SU PROGRAMA DE ESTUDIOS</a>

</div>
<div class="container-fluid" class="container-my-4">
        <table  class="table" align="center">
                <thead class="table table-striped">
                    <tr align="center" class="bg-success">
                        <th scope="col">#ID</th>
                        <th scope="col">PROGRAMAS</th>
                        <th  scope="col">CUI</th>
    
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($programas as $item )
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nombre_programa}}</td>
                        <td>{{$item->CUI}}</td>
    
                        <td>
                            <a href="{{route('programadetalle', $item)}}" type="button"
                                class="btn btn-primary">DUCUMENTAR</a>
                            {{-- <a href="{{route('programas', $item)}}" ype="button" class="btn btn-primary">DUCUMENTAR</a>
                            --}}
                        </td>
                    </tr>
                    @endforeach()
    
                </tbody>
    
            </table>
    
        </div>
        @endsection
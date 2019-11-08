@extends('layouts.plantilla')

@section('name')


<div aling="center" class="container-fluid container-my-4">
    <h1>CALIFICACION DE LOS ESTANDARES</h1>
    {{-- <form>
        <div class="form-group">
            <label for="formGroupExampleInput">PROGRAMA DE ESTUDIOS</label>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value=""></p>
        </div>
        {{-- <div class="form-group">
            <label for="formGroupExampleInput2">VER TABLA DE CALIFICACION</label>
            <a href="#" class="btn btn-warning pull-right" data-toggle="modal" data-target="#create">VER</a>
            
        </div> --}}
    {{-- </form> --}}
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-bordered table-info" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-success">
                <th scope="col">#ID</th>
                <th scope="col">Link</th>
                <th scope="col">Calificacion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estandar</th>
                {{-- <th scope="col">estandar_NAME</th> --}}
                {{-- <th scope="col">P_id</th> --}}
                <th align="center" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($devolverisprograma as $iteme )
            <tr>
                <th scope="row">{{$iteme->id}}</th>
                <td>{{$iteme->link}}</td>
                <td align="center" >{{$iteme->calificacion}}</td>
                <td align="center">{{$iteme->fecha}}</td>
                <td align="center">{{$iteme->estandar_id}}</td>
                {{-- <td>{{$iteme->nombre_estandar}}</td> --}}

                {{-- <td>{{$iteme->programa_id}}</td> --}}
                {{--// <td>{{$iteme->programa_id}}</td> --}}
                {{-- <td>{{$item->programa_id}}</td> --}}

                <td align="center">
                    <a href="{{route('programas.editar', $iteme)}}" type="button" class="btn btn-danger">Calificar</a>
                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                    <a href="{{$iteme->link}}" target="_blank" type="button" class="btn btn-warning">Verificar archivo</a>
                    {{-- <a href="" type="button" class="btn btn-info">VER</a> --}}
                </td>
            </tr>
            {{-- @foreach ($devolverisprograma as $iteme )
                <tr>
                    <td>{{$iteme->programa_id}}</td>
            </tr> --}}
            {{-- @endforeach() --}}
            @endforeach()

        </tbody>

    </table>
    {{-- @include('modal') --}}
</div>

@endsection()

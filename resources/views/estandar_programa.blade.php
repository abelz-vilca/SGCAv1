@extends('layouts.plantilla')

@section('name')


<div class="container-fluid" class="container-my-4">
    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">PROGRAMA DE ESTUDIOS</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">VER TABLA DE CALIFICACION</label>
            <a href="#" class="btn btn-warning pull-right" data-toggle="modal" data-target="#create">VER</a>
            <label for="formGroupExampleInput2">VER ESTANDARES</label>
            <a href="#" class="btn btn-warning pull-right" data-toggle="modal" data-target="#create">VER</a>
        </div>
    </form>
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-bordered">
        <thead class="table table-striped">
            <tr class="bg-primary">
                <th scope="col">#ID</th>
                <th scope="col">link</th>
                <th scope="col">calificacion</th>
                <th scope="col">fecha</th>
                <th scope="col">E_id</th>
                {{-- <th scope="col">estandar_NAME</th> --}}
                <th scope="col">P_id</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($devolverisprograma as $iteme )
            <tr>
                <th scope="row">{{$iteme->id}}</th>
                <td>{{$iteme->link}}</td>
                <td>{{$iteme->calificacion}}</td>
                <td>{{$iteme->fecha}}</td>
                <td>{{$iteme->estandar_id}}</td>
                {{-- <td>{{$iteme->nombre_estandar}}</td> --}}

                {{-- <td>{{$iteme->programa_id}}</td> --}}
                <td>{{$iteme->programa_id}}</td>
                {{-- <td>{{$item->programa_id}}</td> --}}

                <td>
                    <a href="{{route('programas.editar', $iteme)}}" type="button" class="btn btn-primary">CALIFICAR</a>
                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                    <a href="{{$iteme->link}}" target="_blank" type="button" class="btn btn-warning">VERIFICAR</a>
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

</div>

@endsection()

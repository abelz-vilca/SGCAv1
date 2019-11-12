@extends('layouts.plantilla')

@section('name')
<div align="center">

    <h4>SELECCIONE SU PROGRAMA DE ESTUDIOS</h4>

</div>
<div class="container-fluid" class="container-my-4">
    <table class="table table-bordered table-info" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-success">
                <th scope="col">#ID</th>
                <th scope="col">PROGRAMAS</th>
                <th scope="col">CUI</th>

                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($programas as $item )
            <tr class="table-info">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre_programa}}</td>
                <td>{{$item->CUI}}</td>

                <td>
                    <a href="{{route('programadetalle', $item)}}" type="button" class="btn btn-danger">DUCUMENTAR</a>
                    {{-- <a href="{{route('programas', $item)}}" ype="button" class="btn btn-primary">DUCUMENTAR</a>
                    --}}
                </td>
            </tr>
            @endforeach()

        </tbody>

    </table>
    {{ $programas->links() }}
</div>
@endsection
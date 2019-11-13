@extends('layouts.plantilla')

@section('name')


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
{{-- <div align="center">

    <a class="btn btn-dark" href="">Selecionar el Programa de Estudios</a>
</div> --}}
<div class="container-my-2">

    <table id="example" class="table table-striped table-bordered" style="width:100%" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-success">
                <th scope="col">#ID</th>
                <th scope="col">PROGRAMAS DE ESTUDIOS</th>
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
                    <a href="{{route('programadetalle', $item)}}" type="button" class="btn btn-info"><i
                            class=" fa fa-file"> </i> DUCUMENTAR</a>


                    {{-- <a href="{{route('programas', $item)}}" ype="button" class="btn btn-primary">DUCUMENTAR</a>
                    --}}
                </td>
            </tr>
            @endforeach()

        </tbody>

    </table>
    {{-- {{ $programas->links() }} --}}
    <script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
</div>


@endsection
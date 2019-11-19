@extends('layouts.plantilla')
@section('name')
<div align="center" class="container-my-2">
    {{-- <a type="button" class="btn btn-success">SELECCIONAR PROGRAMA DE ESTUDIOS</a> --}}
    <h1 align="center">SELECCIONAR PROGRAMA DE ESTUDIOS</h1>
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-striped table-bordered" id="reporte" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-danger">
                <th scope="col">#ID</th>
                <th scope="col">PROGRAMAS</th>
                <th scope="col">CUI</th>

                <th class="col">Acciones</th>
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
                    <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-info">REPORTE
                        NUMÉRICO</a>
                    <a href="{{route('graficofactor',$item)}}" type="button" class="btn btn-secondary"> REPORTE FACTORES
                    </a>
                    <a href="{{route('graficodimension',$item)}}" type="button" class="btn btn-warning">DIMENSIONES </a>
                    <a href="{{route('graficocaed',$item)}}" type="button" class="btn btn-secondary">ED</a>
                </td>


            </tr>
            @endforeach()
        </tbody>
    </table>
</div>

<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Editable -->
<script src="../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="../assets/plugins/tiny-editable/numeric-input-example.js"></script>
<script>
    $('#reporte').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#reporte').DataTable({
            "language": lenguaje_espanol
                          
        } );
                   
                });

                var lenguaje_espanol = {
    "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
}
</script>
@endsection()
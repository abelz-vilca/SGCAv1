@extends('layouts.plantilla')
@section('name')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>PRUEBA</title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff">
    <link rel="stylesheet" type="text/css" link
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href=link
        href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style type="text/css" class="init">

    </style>
    <script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap4.html" async>
    </script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
        $('example').DataTable();
    } );
    
    </script>
    <title>sumaestandar</title>
</head>

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
                <div class="col-sm-4">
                    <h4 class="fas fa-align-right">id</h4>
                    <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                            value="{{$programas->id}}"></p>
                </div>
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
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#id</th>
                                <th>calificacion</th>
                                <th>FECHA</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estandarprograma as $item )
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->calificacion}}</td>
                                <td>{{$item->fecha}}</td>
                                <td>
                                    <a disabled="disabled" href="" type="button" class="btn btn-info">Información</a>
                                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                                </td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <div class="col-sm-10">
                        <h4>Programa de estudios</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$programas->nombre_programa}}"></p>
                        <h4>Calificacion total Programa:</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                                value="{{$categorias}}"></p>
                        <h4>FACTOR 01</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma1}}">
                        </p>

                        <h4>FACTOR 02</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma2}}">
                        </p>

                        <h4>FACTOR 03</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma3}}">
                        </p>

                        <h4>FACTOR 04</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma4}}">
                        </p>

                        <h4>FACTOR 05</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma5}}">
                        </p>

                        <h4>FACTOR 06</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma6}}">
                        </p>

                        <h4>FACTOR 07</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma7}}">
                        </p>

                        <h4>FACTOR 08</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma8}}">
                        </p>

                        <h4>FACTOR 09</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma9}}">
                        </p>

                        <h4>FACTOR 10</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma10}}">
                        </p>

                        <h4>FACTOR 11</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma11}}">
                        </p>

                        <h4>FACTOR 12</h4>
                        <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$suma12}}">
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





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>


        <script type="text/javascript">
            var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-365466-5']);
				  _gaq.push(['_trackPageview']);

				  (function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();
        </script>
</body>

</html>
@endsection
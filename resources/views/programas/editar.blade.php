@extends('layouts.plantilla')

@section('name')

<head>
    <title>EDITAR XD</title>
</head>


<header>

    <!-- Image and text -->
    <nav class="navbar navbar-black bg-info">
        <a class="navbar-brand" href="{{route('estandar_programa.create')}}">
            <img src="/plantilla/images/avatars/avatar.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            a casa XD
        </a>

    </nav>
</header>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}
                </div>
                @endif
                <form method="POST" action="{{ route('estandar_programa.update', $devolverisprograma->id ) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="basic-url">LINK DE SU ARCHIVO</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://archivo01.com</span>
                                        </div>
                                        {{-- <input type="text" name="link" class="form-control" value="{{old('link')}}">
                                        --}}
                                        <input type="text" name="link" class="form-control"
                                            value="<?php echo($devolverisprograma->link); ?>">

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="calificacion">Seleccione la Calificación del Estándar</label>
                                    <div class="controls">
                                        <select name="calificacion" id="calificacion" required class="form-control">
                                            {{-- <select name="calificacion" required class="form-control"> --}}
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">
                                                Seleccione su Calificación</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">1
                                            </option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>

                                        </select>
                                    </div>
                                    {{-- xdxdxd1 --}}
                                </div>
                                <div class="form-group col-md-12">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="estandar_id">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value=" ESTÁNDAR Nro : <?php echo($devolverisprograma->estandar_id); ?>">

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="estandar_id">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value="programa ID : <?php echo($devolverisprograma->programa_id); ?>">

                                </div>
                            </div>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-success" value="Guardar">
                </form>
            </div>

        </div>
    </div>
</div>

<div class="p-3 mb-2 bg-warning text-dark">

    {{-- {{route('estandar_programaid')}} --}}
    {{-- {{route('estandar_programaid',$devolverisprograma->programa_id)}} --}}
    <a class="navbar-brand" href="{{route('estandar_programaid',$devolverisprograma->programa_id)}}">
        <img src="/plantilla/images/avatars/avatar.png" width="30" height="30" class="d-inline-block align-top" alt="">
        a casa XD
    </a>


</div>
@endsection
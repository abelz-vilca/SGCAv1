@extends('layouts.plantilla')

@section('name')

<head>
    <title>EDITAR XD</title>
</head>


<header>

    <!-- Image and text -->

</header>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="background-color: #BDD7D6;">
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
                                    <label for="basic-url">SELECIONE EL DOCUMENTO</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <input type="file" class="form-control-file" name="archivo" id="">
                                        </div>
                                        {{-- <input type="text" name="link" class="form-control" value="{{old('link')}}">
                                        --}}
                                        {{-- <input type="text" name="link" class="form-control"
                                            value=""> --}}

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="calificacion">Seleccione la Calificación del Estándar</label>
                                    <div class="controls">
                                        <select name="calificacion" id="calificacion" required class="form-control">
                                            {{-- <select name="calificacion" required class="form-control"> --}}
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">
                                                Seleccione su Calificación</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">1</option>
                                            </option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">2</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">3</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">4</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">5</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">6</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">7</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">8</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">9</option>
                                            <option value="<?php echo($devolverisprograma->calificacion); ?>">10
                                            </option>

                                        </select>
                                    </div>

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

<div align="center">

    {{-- {{route('estandar_programaid')}} --}}
    {{-- {{route('estandar_programaid',$devolverisprograma->programa_id)}} --}}
    <a align="center" class="navbar-brand" href="{{route('estandar_programaid',$devolverisprograma->programa_id)}}">
        <img src="{{asset('imagenes/regresar.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
        REGRESAR A VERIFICAR EL DOCUMENTO Y CALIFICACION
    </a>
</div>
@endsection
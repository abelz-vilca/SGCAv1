@extends('layouts.plantilla')
@section('name')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('mensaje'))
                <div class="alert alert-success">
                    {{session('mensaje')}}
                </div>
                @endif
                <form action="{{ route('subir.archivo') }}" method="POST" enctype="multipart/form-data">

                    {{-- @method('PUT') --}}
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">

                                    <label for="">Archivo XDXD</label>
                                    <input type="file" class="form-control-file" name="archivo" id="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">estadares_id</label>
                                    <input type="text" class="form-control" id="" name="estandares_id" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">fecha</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">programas_id</label>
                                    <input type="text" class="form-control" id="" name="programas_id" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">archivo</label>
                                    <input type="text" class="form-control" id="" name="" placeholder="">
                                </div>

                            </div>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-success" value="Guardar">

                </form>

            </div>

        </div>

    </div>
    <div>

        <img width="50px" src="{{Storage::url('archivo.png')}}" alt="">
    </div>
    <table>
        <table class="table table-striped table-bordered" id="editable-datatable">
            <thead>
                <tr align="center" class="bg-success">
                    <th scope="col">#ID</th>
                    <th scope="col">archivo</th>
                    <th scope="col">estandar id</th>

                    <th scope="col">programa id</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pruebas as $item )
                <tr class="table-info">
                    <th scope="row">{{$item->id}}</th>
                    <td><a href="{{Storage::url($item->archivo)}}" target="_blank">abrir archivo</a> </td>
                    <td>{{$item->estandares_id}}</td>
                    <td>{{$item->programas_id}}</td>
                    <td>
                        <a href="{{Storage::url($item->archivo)}}" target="_blank" type="button" class="btn btn-info">
                            <img src="{{asset('imagenes/internet.png')}}" width="30" height="30">

                            Verificar </a>
                    </td>

                </tr>
                @endforeach()

            </tbody>

        </table>
    </table>
</div>
@endsection
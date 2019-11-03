@extends('layouts.plantilla')

@section('name')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Institución</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Institución">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Programa de estudios</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="Programa de estudios">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Fecha</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Jefe de calidad</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="Jefe de calidad">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Contacto</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Contacto">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Presidente</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Presidente">
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
@endsection
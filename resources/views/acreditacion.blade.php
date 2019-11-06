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
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                     placeholder="UNIVERSIDAD NACIONAL DE SAN CRISTOBAL DE HUAMANGA">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">PE</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="Programa de estudios">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Fecha</label>
                                    <input type="email" class="form-control" id="inputEmail4" 
                                    value="<?php echo date("d/m/Y"); ?>" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Jefe de la Oficina</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        placeholder="Dra Luisa Alcarraz Curi">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Contacto</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4" placeholder="0665434">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Presidente</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4" placeholder="Presidente">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <input type="submit" class="btn btn-success" value="Guardar"> --}}
                    
                </form>
                
            </div>
            <a class="btn btn-success" href="programas">CALIFICAR PROGRAMAS</a>
            
        </div>
        
    </div>
</div>

@endsection
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $fillable = [
            'id',
         'nombre_docente',
         'ape_paterno',
         'ape_materno',
         'telefono',
         'email',
         'cargo',
         'estado'

         
     ];
     public function programa_estudio()
        {
            return $this->belongsTo('App\Programa');
        }
}

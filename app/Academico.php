<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';
   protected $fillable = [
   		'id',
        'nombre_academico',
        'facultad_id'
        
    ];
}

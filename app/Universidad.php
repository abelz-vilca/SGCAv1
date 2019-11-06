<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table = 'universidades';
    protected $fillable = [
            'id',
         'nombre_universidad',
         'direccion_universidad',
         'telefono',
         'region_id'
         
     ];
}

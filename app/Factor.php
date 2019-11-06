<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $table = 'factores';
    protected $fillable = [
            'id',
         'nombre_factor',
         'factor_id'
         
     ];
}

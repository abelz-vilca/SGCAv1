<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $table = 'dimensiones';
    protected $fillable = [
        'id',
        'nombre_dimension'

    ];
}

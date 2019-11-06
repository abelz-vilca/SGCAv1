<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
    protected $fillable = [
        'id',
        'nombre_programa',
        'CUI',/*código único de identificación*/
        'academico_id',
        'facultades_id'


    ];
    public function estandar()
    {
        return $this->belongsToMany(
            'App\Estandar',
            'estandar_programa',
            'programa_id',
            'estandar_id'
        )->withPivot(
            'estandar_id',
            'link',
            'calificacion',
            'fecha'
        );
    }

    // public function docentes()
    // {
    //     return $this->hasMany('App\Docente');
    // }
}

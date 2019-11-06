<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estandar extends Model
{
    protected $table = 'estandares';
    protected $fillable = [
        'id',
        'nombre_estandar',
        'factor_id'

    ];
    public function programa()
    {
        return $this->belongsToMany(
            'App\Programa',
            'estandar_programa',
            'estandar_id',
            'programa_id'
        )->withPivot(
            'programa_id',
            'link',
            'calificacion',
            'fecha'
        );
    }

    public static function promedio_ponderado($id, $vaina)
    {
        return DB::query("CALL palm_01(" . $id . "," . $vaina . ")");
    }
}

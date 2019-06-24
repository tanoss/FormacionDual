<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProjectPlan extends Model
{
    protected $fillable = ['idPlanMarcoFormacion','titulo','analisis','objetivo','descripcion','indicador','medicion','meta','fuenteDatos','presupuesto','beneficiosEsperados','prioridad'];

    public function planmarcoformacion()
    {
        return $this->belongsTo(FrameworkPlanTraining::class);
    }
}
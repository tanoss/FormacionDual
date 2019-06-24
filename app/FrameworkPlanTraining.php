<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrameworkPlanTraining extends Model
{
    protected $fillable = ['prioridad','tracing_id'] ;

    public function planrotacion()
    {
        return $this->hasOne(RotationPlan::class);
    }
    
    public function planproyectoempresarial()
    {
        return $this->hasOne(BusinessProjectPlan::class);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessProjectPlan;
use App\FrameworkPlanTraining;
class BusinessProjectPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusinessProjectPlan::get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataBodyClient = $request->json()->all();
        $dataBusinessProjectPlan = $dataBodyClient['business_project_plans'];
        $dataFrameworkPlanTraining = $dataBodyClient['training_framework_plans'];
        $frameworkplantraining =  FrameworkPlanTraining::findorfail($dataFrameworkPlanTraining['id']);
        $frameworkplantraining->business_project_plans()->create([
            'idPlanMarcoFormacion'=>$dataBusinessProjectPlan['idPlanMarcoFormacion'],
            'titulo'=>$dataBusinessProjectPlan['titulo'],
            'analisis'=>$dataBusinessProjectPlan['analisis'],
            'objetivo'=>$dataBusinessProjectPlan['objetivo'],
            'descripcion'=>$dataBusinessProjectPlan['descripcion'],
            'indicador'=>$dataBusinessProjectPlan['indicador'],
            'medicion'=>$dataBusinessProjectPlan['medicion'],
            'meta'=>$dataBusinessProjectPlan['meta'],
            'fuenteDatos'=>$dataBusinessProjectPlan['fuenteDatos'],
            'presupuesto'=>$dataBusinessProjectPlan['presupuesto'],
            'beneficiosEsperados'=>$dataBusinessProjectPlan['beneficiosEsperados'],
            'prioridad'=>$dataBusinessProjectPlan['prioridad'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BusinessProjectPlan::where('id',$id)->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return BusinessProjectPlan::where('id', $id)->get();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

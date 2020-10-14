<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;

class EvaluacionController extends Controller
{
    
public function dataTable(
    )
    {
        $evaluaciones=Evaluacion::all();

        return view('dataTable', compact("evaluaciones"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
           

        $evaluacion = new Evaluacion;
        
        $evaluacion->totalgranos =   $request->totalgranos;
        $evaluacion->nombre=$request->nombre;
        $evaluacion->lote=$request->lote;
        $evaluacion->finca=$request->finca;
        $evaluacion->fechadeevaluacion=$request->fechadeevaluacion;
        $evaluacion->brocasvivasA  =   $request->brocasvivasA;
        $evaluacion->borcasvivasB =   $request->borcasvivasB;
         $evaluacion->borcasvivasC =   $request->borcasvivasC;
         $evaluacion->brocasmuertasA =   $request->brocasmuertasA;
             $evaluacion->brocasmuertasB =   $request->brocasmuertasB;
                  $evaluacion->brocasmuertasC =   $request->brocasmuertasC;
                   $evaluacion->brocasausentes =   $request->brocasausentes;

         $evaluacion->save();

      
    }

/*
 public function calculo()
 {
     echo "es vaina";
    $calculo=DB::table('evaluaciones')->select('totalgranos')->count();

    return view('calculartotal', compact('calculo'));

 }
 */
    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        //
    }


     public function traer(Request $request)
    {
        return $request;

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }
}

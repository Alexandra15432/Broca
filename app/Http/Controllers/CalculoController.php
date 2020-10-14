<?php

namespace App\Http\Controllers;
use App\Finca;
use App\Http\Controllers\Validator;
use App\Tipoevaluador;
use App\Calculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class CalculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
      


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

/*
      $v = Validator::make($request->all(), [






'nombredelevaluador'=>'required',
'fincaEva'=>'required',
  'loteEva'=>'required',
    'fechadeevaluacion'=>'required|date|before:today',

    'porcentajedeinfestacion'=>'required',
    'porcentajedemortalidad'=>'required',
'porcentajedeausencia'=>'required'





            /*
            'codigo' => 'required',
            'nombres' => 'required',
            'apellidos'    => 'required',
            'programa' => 'required',
            'fechaDeNacimiento' => 'required|date|before:today'
          
            
        ]);
 
        if ($v->fails())
        {
             return redirect()->back()->withInput()->withErrors($v->errors())->with('message', 'ingrese los datos nuevamente');

        }else
        {
 return redirect()->back()->withInput()->withErrors($v->errors())->with('message', 'El cálculo se guardó con éxito');
}
    }


            */    

          $calculo = new Calculo;
        
         $calculo->nombredelevaluador   =   $request->nombredelevaluador;
        
          $calculo->fincaEva  =   $request->fincaEva;
          $calculo->loteEva=   $request->loteEva;
            $calculo->fechadeevaluacion=   $request->fechadeevaluacion;
         $calculo->porcentajedeinfestacion=   $request->porcentajedeinfestacion;
           $calculo->porcentajedemortalidad=   $request->porcentajedemortalidad;
            $calculo->porcentajedeausencia=   $request->porcentajedeausencia;
           


         $calculo->save();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calculo  $calculo
     * @return \Illuminate\Http\Response
     */
    public function show(Calculo $calculo)
    {
         $tipoevaluadores = Tipoevaluador::all();
         $fincas=Finca::all();
         return view('consultaspasadas',compact('tipoevaluadores','fincas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calculo  $calculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculo $calculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calculo  $calculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculo $calculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calculo  $calculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculo $calculo)
    {
        //
    }
}

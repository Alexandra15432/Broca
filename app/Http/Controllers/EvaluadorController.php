<?php

namespace App\Http\Controllers;

use App\Evaluador;
use App\Tipoevaluador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
//use DB;
class EvaluadorController extends Controller
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
    
    public function dataTable(
    )
    {
        $evaluadores=Evaluador::all();

        return view('dataTable', compact("evaluadores"));
    }
    public function index()
    {
        return view('principal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoevaluadores = Tipoevaluador::all();
 
        return view('evaluadorGrabar', compact('tipoevaluadores'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       echo "entró";
        if($request->ajax()){
           Evaluador::create($request->all());
        }
        else{           
        $evaluador = new Evaluador;
        $evaluador->cedula     =   $request->cedula;
        $evaluador->nombres    =   $request->nombres;
        $evaluador->apellidos  =   $request->apellidos;
        $evaluador->fechadenacimiento =   $request->fechadenacimiento;
        $evaluador->direccion  =   $request->direccion;
        $evaluador->municipio =   $request->municipio;
         $evaluador->correo =   $request->correo;
              $evaluador->tipo_evaluador_id=   $request->tipo_evaluador_id;
        $evaluador->save();
        return redirect()->route('evaluador.mostrar');
        //$estudiantes=Estudiante::all();
        //return view('principal',compact("estudiantes"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluador $evaluador)
    {
        return view('Evaluador');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluador $evaluador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluador $evaluador)
    {
        //

            $evaluador->update([
    'id'=>request('id'),
        'cedula'     =>  request('cedula'),
        'nombres'    =>  request('nombres'),
    'apellidos'  =>  request('apellidos'),
       ' fechadenacimiento' =>  request('fechadenacimiento'),
        'direccion'  =>   request('direccion'),
        'municipio' =>  request('municipio'),
        'correo' =>request('correo'),
              
        ]);
             
        
       // return redirect()->route('evaluador.mostrar');
        //$estudiantes=Estudiante::all();
        //return view('principal',compact("estudiantes"))
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request)
    {
      
        if($request->ajax()){
             $evaluador = Evaluador::find($request->id);
             $evaluador->delete();
              return redirect()->route('evaluador.mostrar');
            
        }

    }

}

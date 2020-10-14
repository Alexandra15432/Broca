<?php

namespace App\Http\Controllers;

use App\Finca;
use Illuminate\Http\Request;

use App\Tipoevaluador;
use Response;
use Illuminate\Support\Facades\DB;

use Validator;
class FincaController extends Controller
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
        $fincas=Finca::all();

        return view('dataTable', compact("fincas"));
    }



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
        //


         $v = \Validator::make($request->all(), [

      'nombre'=>'required',
      'direccion'=>'required',
      'municipio'=>'required'



             ]);

 if ($v->fails())
        {


return Response::json("no se pudo mano");

        }else{
            $finca = new Finca;
        
         $finca->nombre    =   $request->nombre;
        
         $finca->direccion  =   $request->direccion;
         $finca->municipio =   $request->municipio;
        
         $finca->save();
         return Response::json("si se pudo mano");

        return redirect()->route('finca.mostrar');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finca  $finca
     * @return \Illuminate\Http\Response
     */
    public function show(Finca $finca)
    {
         $tipoevaluadores = Tipoevaluador::all();
         $fincas=Finca::all();
        //  $municipios= Municipio::all();
         
         return view('finca',compact('tipoevaluadores','fincas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finca  $finca
     * @return \Illuminate\Http\Response
     */
    public function edit(Finca $finca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finca  $finca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finca $finca)
    {
           $id=$request->id;
  $user = DB::table('fincas')
              ->where('id', $id)
              ->update(['nombre' => request('nombre'), 
                   'direccion'=>request('direccion'),   
                    'municipio'=>request('municipio'),
                    ]);
               return redirect()->route('finca.mostrar');
    
               
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finca  $finca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         if($request->ajax()){
             $finca = Finca::find($request->id);
             $finca->delete();
               return redirect()->route('finca.mostrar');
            
        }
    }
}

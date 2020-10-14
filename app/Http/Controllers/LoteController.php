<?php

namespace App\Http\Controllers;
use App\Lote;
use Illuminate\Http\Request;
use Response;
use App\Finca;
use Illuminate\Support\Facades\DB;
use App\Tipoevaluador;


class LoteController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }
      public function dataTable(
    )
    {
        $lotes=Lote::all();

        return view('dataTable', compact("lotes"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
            $lote = new Lote;
        
         $lote->lote_numero    =   $request->lote_numero;
        
         $lote->finca_id  =   $request->finca_id;
         $lote->extension =   $request->extension;
        
         $lote->save();

        return redirect()->route('lote.mostrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show(Lote $lote)
    {
           $fincas=Finca::all();
           $tipoevaluadores = Tipoevaluador::all();
           // $municipios= Municipio::all();
    
          
         return view('lote', compact('tipoevaluadores','fincas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit(Lote $lote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lote $lote)
    {
        //

        
           $id=$request->id;

  $user = DB::table('lotes')
              ->where('id', $id)
              ->update(['lote_numero' => request('lote_numero'), 
                   'finca_id'=>request('finca_id'),   
                    'extension'=>request('extension'),
                    ]);
               return redirect()->route('lote.mostrar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

         if($request->ajax()){
             $lote = Lote::find($request->id);
             $lote->delete();
               return redirect()->route('lote.mostrar');
            
        }
    }
}

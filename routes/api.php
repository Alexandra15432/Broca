<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Finca;
use DB as DBS;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('evaluadores',function(){
	return datatables( DBS::table('evaluadores')->orderBy('id','DESC'))->addColumn('btn','actions')->rawColumns(['btn'])->toJson();

});
*/



Route::get('usuarios',function(){
	return datatables( DBS::table('users')
       
       ->join('tipoevaluadores', 'tipoevaluadores.id','=', 'users.tipo_evaluador_id')
       ->select('users.id as id','users.name as name','users.apellidos as apellidos', 'users.email as email','tipoevaluadores.nombre as tipo', 'users.cedula as cedula',
       	'users.direccion as direccion', 'users.municipio as municipio','users.fechadenacimiento as fechadenacimiento', 'users.tipo_evaluador_id as tipo_evaluador_id')


		->orderBy('id','DESC'))->addColumn('btn','actions')->rawColumns(['btn'])	
	->toJson();

});

Route::get('fincas',function(){
	return datatables(DB::table('fincas')->orderBy('id', 'DESC'))		
	->addColumn('btn','actions')
	->rawColumns(['btn'])	
	->toJson();
});

Route::get('lotes',function(){
	return datatables( DBS::table('lotes')
       
       ->join('fincas', 'fincas.id','=', 'lotes.finca_id')
       ->select('lotes.id as id','lotes.lote_numero as lote_numero','fincas.nombre as nombrefinca', 'lotes.extension as extension', 'lotes.finca_id as finca_id')


		->orderBy('id','DESC'))->addColumn('btn','actions')->rawColumns(['btn'])	
	->toJson();

});


Route::get('evaluacionestraer/{nombre}/{finca}/{fecha}/{lote}',function($nombre, $finca, $fecha, $lote){


/*
	return datatables(DB::table('evaluaciones')->orderBy('id', 'DESC'))		
	->addColumn('btn','actions')
	->rawColumns(['btn'])	
	->toJson();

	*/
	return datatables(DBS::table('evaluaciones')->select('id','totalgranos','brocasvivasA','borcasvivasB','borcasvivasC','brocasmuertasA','brocasmuertasB','brocasmuertasC','brocasausentes')->where('nombre',$nombre, 'like')->where('finca', '=', $finca)->where('lote','=',$lote)->where('fechadeevaluacion', $fecha, 'like')->orderBy('id', 'DESC'))	
	
	->toJson();
	
});

Route::get('evaluacionescalculo/{nombre}/{finca}/{fecha}/{lote}',function($nombre, $finca, $fecha, $lote){


/*
	return datatables(DB::table('evaluaciones')->orderBy('id', 'DESC'))		
	->addColumn('btn','actions')
	->rawColumns(['btn'])	
	->toJson();

	*/
	return datatables(DBS::table('calculos')->select('porcentajedeinfestacion','porcentajedemortalidad','porcentajedeausencia')->where('nombredelevaluador',$nombre, 'like')->where('fincaEva', '=', $finca)->where('loteEva','=',$lote)->where('fechadeevaluacion', $fecha, 'like')->orderBy('id', 'DESC'))->toJson(); 	
	
	
	
});


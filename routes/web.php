<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/evaluacionestraer/{nombre}/{finca}/{fecha}/{lote}','EvaluacionController@traer')->name('evaluaciones.traer')->middleware('verified');
Route::get('evaluacionesañadir/{nombre}/{finca}/{fecha}/{lote}', 'CalculoController@index')->name('calculos.traer')->middleware('verified');
Route::get('/AdministrarUsuario','UserController@show')->name('usuario.mostrar')->middleware('verified');
Route::POST('/usuarios', 'UserController@store')->name('usuario.grabar')->middleware('verified');
Route::POST('/fincas', 'FincaController@store')->name('finca.grabar')->middleware('verified');
Route::POST('/lotes', 'LoteController@store')->name('lote.grabar')->middleware('verified');
Route::POST('/evaluaciones', 'EvaluacionController@store')->name('evaluacion.grabar')->middleware('verified');
Route::POST('/calculos', 'CalculoController@store')->name('calculo.grabar')->middleware('verified');

Route::patch('/usuarios/{usuario}', 'UserController@update')->name('usuarios.actualizar')->middleware('verified');
Route::patch('/fincas/{finca}', 'FincaController@update')->name('fincas.actualizar')->middleware('verified');
Route::patch('/lotes/{lote}', 'LoteController@update')->name('lotes.actualizar')->middleware('verified');
Route::get('/AdministrarFinca','FincaController@show')->name('finca.mostrar')->middleware('verified');
Route::get('/AdministrarLote','LoteController@show')->name('lote.mostrar')->middleware('verified');
Route::get('/ConsultaEP','CalculoController@show')->name('calculos.mostrar')->middleware('verified');

Route::DELETE('/usuarios/eliminar/{usuario}', 'UserController@destroy')->name('usuarios.eliminar')->middleware('verified');
Route::DELETE('/fincas/eliminar/{finca}', 'FincaController@destroy')->name('fincas.eliminar')->middleware('verified');
Route::DELETE('/lotes/eliminar/{lote}', 'LoteController@destroy')->name('lotes.eliminar')->middleware('verified');
//Route::patch('/evaluadores/{evaluador}', 'EvaluadorController@update')->name('evaluadores.actualizar');
Route::get('/calculo','EvaluacionController@calculo')->name('calculo.mostrar')->middleware('verified');

Route::get('/homeEvaluacion', 'HomeController@index2')->name('evaluaciones.mostrar')->middleware('verified');
Route::get('/', function () {
    return view('login');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

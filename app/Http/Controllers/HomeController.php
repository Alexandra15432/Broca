<?php

namespace App\Http\Controllers;
use App\Finca;
use App\Tipoevaluador;

use Illuminate\Http\Request;

//use Illuminate\Http\Request;se Illuminate\Http\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
        return view('home');
    }
    public function index2()
    {
           
           $fincas=Finca::all();
           $tipoevaluadores = Tipoevaluador::all();
         return view('evaluacion', compact('tipoevaluadores','fincas'));
    }
}

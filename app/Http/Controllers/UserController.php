<?php

namespace App\Http\Controllers;
//use app\Municipio;
use App\User;
use App\Finca;
use Validator;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Tipoevaluador;
class UserController extends Controller
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
        $usuarios=User::all();

        return view('dataTable', compact("usuarios"));
    }
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

        
       
    
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          $v = \Validator::make($request->all(), [
            
            'cedula' =>  ['required','min:8', 'max:11'],
            'name' => ['required', 'string', 'max:255'],
            'apellidos'    => ['required', 'string', 'max:255'],
            
            'fechadenacimiento' => 'required|date|before:today',

             'direccion'    => ['required', 'string', 'max:255'],
             'municipio'  =>['required', 'string', 'max:255'],
               'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                 'tipo_evaluador_id'=>['required'],

                 'email.required'=>['debe ingresar una cuneta de correo valida'],
                   ]);
 
 if ($v->fails())
        {
             return Response::json("no se pudo");
           


         }else{



            /*
            $valida= $request->validate([
'cedula' =>  ['required','min:8', 'max:11'],
            'name' => ['required', 'string', 'max:255'],
            'apellidos'    => ['required', 'string', 'max:255'],
            
            'fechadenacimiento' => 'required|date|before:today',

             'direccion'    => ['required', 'string', 'max:255'],
             'municipio'  =>['required', 'string', 'max:255'],
               'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                 'tipo_evaluador_id'=>['required']
             ],
             [


               'required'=>'esa vaina se requiere'

             






            ]);

*/
         $pass= Hash::make(request('password'));
           // echo $pass;
                  
        $usuario = new User;
        $usuario->cedula     =   $request->cedula;
         $usuario->name    =   $request->name;
         $usuario->apellidos  =   $request->apellidos;
         $usuario->fechadenacimiento =   $request->fechadenacimiento;
         $usuario->direccion  =   $request->direccion;
         $usuario->municipio =   $request->municipio;
          $usuario->email =   $request->email;
          $usuario->password = $pass;

               $usuario->tipo_evaluador_id=   $request->tipo_evaluador_id;
         $usuario->save();

                 return Response::json("se pudo");
           //return view('usuario.mostrar')->with('message', 'El usuario se guardó con éxito');


  }
    
}
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
         $tipoevaluadores = Tipoevaluador::all();
         $fincas=Finca::all();
        // $municipios= Municipio::all();
    
         return view('register',compact('tipoevaluadores','fincas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


          $otro = \Validator::make($request->all(), [
            
            'cedula' =>  ['required','min:8', 'max:11'],
            'name' => ['required', 'string', 'max:255'],
            'apellidos'    => ['required', 'string', 'max:255'],
            
            'fechadenacimiento' => 'required|date|before:today',

             'direccion'    => ['required', 'string', 'max:255'],
             'municipio'  =>['required', 'string', 'max:255'],
               'email' => ['required', 'string', 'email', 'max:255'],
                 'tipo_evaluador_id'=>['required'],

                 'email.required'=>['debe ingresar una cuneta de correo valida'],
                   ]);
 
 if ($otro->fails())
        {
             return Response::json("no se pudo editar");
    

}else{



        $id=$request->id;




  $user = DB::table('users')
              ->where('id', $id)
              ->update(['name' => request('name'), 
                'apellidos'=>request('apellidos'),
                 'email'=>request('email'),
                  'cedula'=>request('cedula'),
                   'direccion'=>request('direccion'),
                    'tipo_evaluador_id'=>request('tipo_evaluador_id'),
                    'municipio'=>request('municipio'),
                     'fechadenacimiento'=>request('fechadenacimiento'),
                      'tipo_evaluador_id'=>request('tipo_evaluador_id'),

            ]);
               
           
    return Response::json("se pudo editar");       
}   
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
             $user = User::find($request->id);
             $user->delete();
               return redirect()->route('usuario.mostrar');
            
        }
    }
}

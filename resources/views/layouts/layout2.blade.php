
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Broca') }}</title>

    <!-- Scripts -->
    <!--
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->

    <!-- Fonts -->
   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href ="{{asset('assets\air-datepicker\dist\css\acordeonestilo.css')}}" rel="stylesheet">


<!-- datatable-->

  <link rel="stylesheet" type="text/css" href="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets\air-datepicker\dist\css\datepicker.css')}}">

    <style>

    .datepicker {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }

</style>


 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

</head>
<body>

    <div id="app">
       <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                <!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            -->
            <img src="{{ asset('img/logosmall.png') }}" style=" width: 150px;
  height: 60px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          
                          <li class="nav-item" >
                                <a class="nav-link"  hidden="hidden" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            
                            @if (Route::has('register'))

                            
                           
                                <li class="nav-item">
                                    <a class="nav-link" hidden="hidden" href="{{ route('register') }}">{{ __('Crear Cuenta') }}</a>
                                </li>
                            @endif
                        @else
                             
                             @if(Auth::user()->tipo_evaluador_id === 2)

                                
                                  <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                             </li>
                              
                          
                                  <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('evaluaciones.mostrar') }}">{{ __('Realizar evaluacion') }}</a>
                             </li>
                             
                          <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('calculos.mostrar') }}">{{ __('Consultar evaluaciones pasadas') }}</a>
                             </li>
 


 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     borrarStorage();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                           
                            @elseif(Auth::user()->tipo_evaluador_id === 3)
                       
                             <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                             </li>

                                  <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('evaluaciones.mostrar') }}">{{ __('Realizar evaluacion') }}</a>
                             </li>
                            <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('calculos.mostrar') }}">{{ __('Consultar evaluaciones pasadas') }}</a>
                             </li>
                         


 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>





                             
                             @else


                              <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                             </li>

                                <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('lote.mostrar') }}">{{ __('Administrar Lote') }}</a>
                             </li>
                                
                               <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('finca.mostrar') }}">{{ __('Administrar Finca') }}</a>
                             </li>

                             <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{ route('usuario.mostrar') }}">{{ __('Administrar Usuario ') }}</a>
                             </li>
                            
                          

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                          @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
 @if(Auth::user()->tipo_evaluador_id === 2)
 <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#InfoEva" title="Oprima aquí para obtener información acerca del uso de la aplicación"> <i class="fas fa-info"></i>
                          </button>
  @elseif(Auth::user()->tipo_evaluador_id === 3)
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#InfoEva" title="Oprima aquí para obtener información acerca del uso de la aplicación"> <i class="fas fa-info" ></i>
                          </button>
   @else

  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#InfoAdmi" title="Oprima aquí para obtener información acerca del uso de la aplicación"> <i class="fas fa-info"></i>
                          </button>
@endif



            @yield('content')
        @include('EliminarUsuario')
        @include('EditarUsuario')
        @include('GrabarUsuario')
       
       
  
           
                  @include('calculartotal')
        @include('GrabarEvaluacion')
         @include('DatosEvaluacion')

          @include('EditarEvaluacion')

          @include('EliminarEvaluacion')
      
       @include('EliminarFinca')
   @include('EditarFinca')
          
    @include('GuardarFinca')
          @include('VerGraficasCon')
   
          @include('verGraficasPor')
          @include ('InfoAdmin')
           @include ('InfoEvaluador')
          
         
     </main>

      
            
   
   
 <main class="py-4">

@yield('content3')
     
     @include('GrabarLote')
     @include('EditarLote')
     @include('EliminarLote')
 </main>
 



     
    

 

  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{asset('assets\air-datepicker\dist\js\datepicker.js')}}"></script>
    <script src="{{asset('assets\air-datepicker\dist\js\i18n\datepicker.es.js')}}"></script>
    <script src="{{asset('assets\air-datepicker\dist\js\acordeon.js')}}"></script>
 <script src="{{asset('assets\air-datepicker\dist\js\localstorage.js')}}"></script>
  <script src="{{asset('assets\air-datepicker\dist\js\graficas.js')}}"></script>
   <script src="{{asset('assets\air-datepicker\dist\js\consultaEvaluacion.js')}}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.js"></script>
<script src="{{asset('assets\air-datepicker\dist\js\jszip.js')}}"></script>
<script src="{{asset('assets\air-datepicker\dist\js\pdfmake.js')}}"></script>
<script src="{{asset('assets\air-datepicker\dist\js\vfs_fonts.js')}}"></script>
<script src="{{asset('assets\air-datepicker\dist\js\buttons.html5.js')}}"></script>




 
</body>


</html>
<script>

    $(function(){

        $('#example').DataTable(
        {
            "serverSide":true,
            "ajax":"{{url('api/usuarios')}}",
            "columns":[

             

              { data:'id'},
              { data:'name'},
              { data:'email'},
              {data:'tipo'},
              {data:'municipio'},
           
                  { data:'btn'},




            
            ],
            "pageLength":8,
            "searching":false,

            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

            },

           
        });
       



    });


</script>

 <script>


 $(function(){

$('#registro').click(function(){

var cod=$('#cedula').val();
var nom=$('#name').val();
var ape=$('#apellidos').val();
var fecha=$('#fechadenacimiento').val();
var direc=$('#direccion').val();
var muni=$('#municipio').val();
var corr=$('#email').val();
var pass=$('#password').val();

var tipoeval=$('#tipoderol').val();
var route="usuarios";
var token=$('#token').val();

var contentmess="Verifique los datos:"+"\n -Verfique que las casillas estén llenas"+"\n-Verifique la dirección de correo electronica. nota: ES IMPORTANTE que esta no haya sido ingresada antes"+"\n -Verifique la fecha de nacimiento"+"\n -Verifique el número de cédula";
$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{
    cedula:cod,
    name:nom,
    apellidos:ape,
    fechadenacimiento:fecha,
    direccion:direc,
    municipio:muni,
    password:pass,
    email:corr,
    tipo_evaluador_id:tipoeval,


},


success:function(response){

if(response == "no se pudo")
{
  swal({ title: 'Error!', text: contentmess, icon: 'warning', button: 'Entendido!'});

$('#cedula').val("");
$('#name').val("");
$('#apellidos').val("");
$('#fechadenacimiento').val("");
$('#direccion').val("");
$('#municipio').val("");
$('#email').val("");
$('#password').val("");


}else if(response == "se pudo"){

 swal({ title: 'Excelente!', text: "El usuario se ha creado con éxito", icon: 'success', button: 'Entendido!'});
}



},

});
$('#example').DataTable().ajax.reload();

// mensajebuenolayout();

});

});
    </script>
<script>
    $(function(){
        //show form Eliminar el usuario
        var table = $('#example').DataTable();

        table.on('click', '.delete',function(){
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            $('#idEliminar').val(data.id);
            //$('#nombre').val(data.nombres);
        $('#deleteUsuario').modal('show');
        });
    });    
</script>
<script>
    $(function(){
        //Eliminar el usuario
       $('#elimina').click( function(){
            var idEliminar = $('#idEliminar').val();
            var token = $('#token').val();
            var ruta  = "usuarios/eliminar/"+idEliminar;
            console.log(idEliminar);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                data: {
                    id: idEliminar
                }
            });
            $('#example').DataTable().ajax.reload();
       });
    });
        
</script>

<script>
    $(function(){
    //show form Eliminar el usuario
    var table = $('#example').DataTable();

    table.on('click', '.edit',function(){
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();  
        
        $('#idEditar').val(data.id);

     $('#cedula1').val(data.cedula);
      $('#name1').val(data.name); 

     $('#apellidos1').val(data.apellidos);
      $('#fechadenacimiento1').val(data.fechadenacimiento);
      $('#direccion1').val(data.direccion);
       $('#municipio1').val(data.municipio);
        $('#email1').val(data.email);
        //$('#nombre').val(data.nombres);
        $('#tipoderol1').val(data.tipo_evaluador_id);
       $('#editUsuario').modal('show');
    });
    });
</script>

<script>
    $(function(){
        //actualizar
       $('#editar').click( function(){
            var idEditar = $('#idEditar').val();
            var cod = $('#cedula1').val();
            var nom = $('#name1').val();
            var ape = $('#apellidos1').val();
            var fecha=$('#fechadenacimiento1').val();
             var direc=$('#direccion1').val();
               var muni= $('#municipio1').val();
               var corr=   $('#email1').val();
               var tipoeval=$('#tipoderol1').val();
               var email2="NULL";
             var contenteditmess= "Verifique los datos:"+"\n -Verfique que las casillas estén llenas"+"\n-Verifique la dirección de correo electronica. nota: ES IMPORTANTE que esta no haya sido ingresada antes"+"\n -Verifique la fecha de nacimiento"+"\n -Verifique el número de cédula";
            var token = $('#token').val();
            var ruta  = "usuarios/"+idEditar;
             console.log(ruta);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type:'patch',
                dataType: 'json',
                data: {
                    id:  idEditar,
                    cedula:cod,
                    name : nom,
                    apellidos : ape,
                    fechadenacimiento: fecha,
                    direccion:direc,
                    municipio:muni,
                   email:corr,
                   email_verified_at:email2,
                    tipo_evaluador_id:tipoeval

                },

                success:function(response){

if(response == "no se pudo editar")
{
  swal({ title: 'Error!', text: contenteditmess, icon: 'warning', button: 'Entendido!'});

}else if(response == "se pudo editar"){

 swal({ title: 'Excelente!', text: "Los datos del usuario se han actualizado  con éxito", icon: 'success', button: 'Entendido!'});
}



},
            });
            $('#example').DataTable().ajax.reload();
       });
    });
</script>

<!--

Aquí van los scripts  de la finca 


    -->
<script>

    $(function(){

        $('#example1').DataTable(
        {
            "serverSide":true,
            "ajax":"{{url('api/fincas')}}",
            "columns":[

             

              { data:'id'},
              { data:'nombre'},
              { data:'direccion'},
              {data:'municipio'},
           
                  { data:'btn'},




            
            ],
            "pageLength":8,
            "searching":false,
            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

            },

           
        });
       

console.log("si llegó por acá");

    });


</script>


<script>
$('#registrofinca').click(function(){


var nom=$('#nombresF').val();

var direc=$('#direccionF').val();
var muni=$('#municipioF').val();

var route="fincas";
if(nom != "" && direc != "" && muni !="")
{


var token=$('#token').val();
$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{
   
    nombre:nom,
    direccion:direc,
    municipio:muni,
    
},

});
$('#example1').DataTable().ajax.reload();
var messbuee="Se registró la finca con éxito";

mensajebuenolayout(messbuee);

$('#nombresF').val("");
$('#direccionF').val("");
$('#municipioF').val("");




}else{

var mess="Verifique los datos:"+"\n- Debe llenar todos los campos pues son de caracter obligatorio";
mensajemalolayout(mess);


}

});
    </script>


    <script>
    $(function(){
        //show form Eliminar el usuario
        var table = $('#example1').DataTable();

        table.on('click', '.delete',function(){
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            $('#idEliminar1').val(data.id);
            //$('#nombre').val(data.nombres);
        $('#deleteFinca').modal('show');
        });
    });    
</script>
<script>

  $(function(){

    $("#deleteFinca").appendTo("body");
  });
</script>
<script>

  $(function(){

    $("#crearFinca").appendTo("body");
  });
</script>

<script>
    $(function(){
        //Eliminar el usuario
       $('#eliminarFinca').click( function(){
            var idEliminar1 = $('#idEliminar1').val();
            var token = $('#token').val();
            var ruta  = "fincas/eliminar/"+idEliminar1;
            console.log(idEliminar1);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                data: {
                    id: idEliminar1
                }
            });
            $('#example1').DataTable().ajax.reload();
              var fincaelimina="La finca seleccionada se ha eliminado con éxito!";
            mensajebuenolayout(fincaelimina);
       });
    });
        
</script>


<script>
    $(function(){
    //show form Eliminar el usuario

    var table = $('#example1').DataTable();
   
    table.on('click', '.edit',function(){
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();  
        
        $('#idEditar1').val(data.id);

   
      $('#nombresFI').val(data.nombre); 

     
      $('#direccionFI').val(data.direccion);
       $('#municipioFI').val(data.municipio);
        
       $('#editFinca').modal('show');





    });
    });
</script>

<script>

  $(function(){

    $("#editFinca").appendTo("body");
  });
</script>


<script>

  $(function(){

    $("#InfoEva").appendTo("body");
  });
</script>

<script>
    $(function(){
        //actualizar
       $('#editarFinca').click( function(){
            var idEditar = $('#idEditar1').val();
           
            var nom = $('#nombresFI').val();
         
             var direc=$('#direccionFI').val();
               var muni= $('#municipioFI').val();
               console.log("muni a editar finca"+muni);

               if(nom != "" && direc !="" && muni !="")
               {
             
            var token = $('#token').val();
            var ruta  = "fincas/"+idEditar;
             console.log(ruta);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type:'patch',
                dataType: 'json',
                data: {
                    id:  idEditar,               
                    nombre : nom,
                    direccion:direc,
                    municipio:muni,
                  
                }
            });
            $('#example1').DataTable().ajax.reload();
            
            var messeditfinca= "Los datos de la finca se han actualizado con éxito";
            mensajebuenolayout(messeditfinca);
          }else{


             var messbadeditfinca="Verifique los datos"+"\n Revise que todos los campos se encuentren llenos";
             mensajemalolayout(messbadeditfinca);

          }
    
       });
    });
</script>
  <!--

Aqui van los scripts del lote
    -->


    <script>

    $(function(){

        $('#example2').DataTable(
        {
            "serverSide":true,
            "ajax":"{{url('api/lotes')}}",
            "columns":[

             

              { data:'id'},
              { data:'lote_numero'},
              { data:'nombrefinca'},
              {data:'extension'},
           
                  { data:'btn'},




            
            ],
            "pageLength":8,
            "searching":false,
            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

            },

           
        });
       



    });
</script>

<script>
$('#registroLote').click(function(){


var num=$('#numeroL').val();

var fincaL=$('#fincaL').val();
var ext=$('#extensionL').val();

if(num!="" && fincaL !="" && ext !="")
{

var route="lotes";
var token=$('#token').val();
$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{
   
    lote_numero:num,
 finca_id:fincaL,
    extension:ext,
    
},

});

$('#example2').DataTable().ajax.reload();
var mensajelote=" El lote se ha registrado con éxito";
mensajebuenolayout(mensajelote);
$('#numeroL').val("");
$('#fincaL').val("");
$('#extensionL').val("");
}else{

var mensajebadlote="Verifique los datos ingresados:"+"\n-Verfique que todos los campos estén llenos pues son obligatorios";
mensajemalolayout(mensajebadlote);


}

});
    </script>

<script>

  $(function(){

    $("#crearLote").appendTo("body");
  });
</script>


<script>
    $(function(){
    //show form Eliminar el usuario

    var table = $('#example2').DataTable();
   
    table.on('click', '.edit',function(){
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();  
        
        $('#idEditarLO').val(data.id);

   console.log(data.id);
      $('#numeroLO').val(data.lote_numero); 

     
      $('#fincaLO').val(data.finca_id);
       $('#extensionLO').val(data.extension);
        
       $('#editLote').modal('show');





    });
    });
</script>

<script>
       $(function(){
        //actualizar
       $('#editarLote').click( function(){
            var idEditar1= $('#idEditarLO').val();
           
            var nume = $('#numeroLO').val();
         
             var finc=$('#fincaLO').val();
               var ext1= $('#extensionLO').val();

               if(nume !="" && finc !="" && ext1 !="")
               {
             
            var token = $('#token').val();
            var ruta  = "lotes/"+idEditar1;
             console.log(ruta);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type:'patch',
                dataType: 'json',
                data: {
                    id:idEditar1,
                   lote_numero:nume,           
                    finca_id:finc,
                    extension:ext1,
                   
                }
            });
            $('#example2').DataTable().ajax.reload();

var mensajeloteac=" El lote se ha actualizado con éxito";
mensajebuenolayout(mensajeloteac);
$('#numeroLO').val("");
$('#fincaLO').val("");
$('#extensionLO').val("");
          }else
          {

var mensajebadloteac="Verifique los datos ingresados:"+"\n-Verfique que todos los campos estén llenos pues son obligatorios";
mensajemalolayout(mensajebadloteac);



          }
       });
    });
</script>



<script>

  $(function(){

    $("#editLote").appendTo("body");
  });
</script>
 <script>
    $(function(){
        //show form Eliminar el usuario
        var table = $('#example2').DataTable();

        table.on('click', '.delete',function(){
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            $('#idEliminarLO').val(data.id);
            //$('#nombre').val(data.nombres);
        $('#deleteLote').modal('show');
        });
    });    
</script>
<script>
    $(function(){
        //Eliminar el usuario
       $('#eliminarLote').click( function(){
            var idEliminarLO = $('#idEliminarLO').val();
            var token = $('#token').val();
            var ruta  = "lotes/eliminar/"+idEliminarLO;
            console.log(idEliminarLO);

            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': token},
                type: 'DELETE',
                dataType: 'json',
                data: {
                    id: idEliminarLO
                }
            });
            $('#example2').DataTable().ajax.reload();

            var eliminalote="El lote se ha eliminado con éxito";
          mensajebuenolayout(eliminalote);
       });
    });
        
</script>

<script>

  $(function(){

    $("#deleteLote").appendTo("body");
  });
</script>
<script>

  $(function(){

    $("#GraficasConsultadas").appendTo("body");
  });
</script>


<!--
 
 aqui va el código de las evaluaciones

    -->

<!--

    <script>

    $(function(){

        $('#exampleBroca').DataTable(
        {
            "serverSide":true,
            "ajax":"{{url('api/evaluaciones')}}",
            "columns":[

             

              { data:'id'},
              { data:'totalgranos'},
              { data:'brocasvivasA'},
              {data:'borcasvivasB'},
                {data:'borcasvivasC'},
                  {data:'brocasmuertasA'},
            {data:'brocasmuertasB'},
             {data:'brocasmuertasC'},
              {data:'brocasausentes'},
                  { data:'btn'},




            
            ],
            "pageLength":8,
            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

            },

           
        });
       



    });


</script>
-->
<!--
 <script>

    function traerEvaluacion(nombre, finca, lote, fecha){

        var nombre=nombre;
        var finca=finca;
        var lote=lote;
        var fecha=fecha;

      console.log('hola soy melosky')

      

     
        $('#exampleBroca').DataTable(
        {
            "serverSide":true,
            "ajax":'api/evaluacionestraer/'+nombre+'/'+finca+'/'+fecha+'/'+lote,
            
            "columns":[

             

              { data:'id'},
              { data:'totalgranos'},
              { data:'brocasvivasA'},
              {data:'borcasvivasB'},
                {data:'borcasvivasC'},
                  {data:'brocasmuertasA'},
            {data:'brocasmuertasB'},
             {data:'brocasmuertasC'},
              {data:'brocasausentes'},
                  { data:'btn'},




            
            ],

            "pageLength":8,
            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

            },

           
        });
       



    };


</script>


<script>
$('#registroEvaluacion').click(function(){

var nombre=$("#nombreevaluador").val();
  var registro=$("#registroEva").val();

var lote=$('#loteEva').val();
var finca=$('#fincaEva').val();
var fecha=$('#fechadeevaluacion').val();
var totalgranos=$('#totalgranos').val();
var brocasVA=$('#brocasVA').val();
var brocasVB=$('#brocasVB').val();
var brocasVC=$('#brocasVC').val();
var brocasMA=$('#brocasMA').val();
var brocasMB=$('#brocasMB').val();
var brocasMC=$('#brocasMC').val();
var brocasAU=$('#brocasAU').val();


var route="evaluaciones";
var token=$('#token').val();
$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{
  nombre:nombre,
  
  lote:lote,
  finca:finca,
  fechadeevaluacion:fecha,
   totalgranos:totalgranos,
    brocasvivasA:brocasVA,
    borcasvivasB:brocasVB,
     borcasvivasC:brocasVC,
   brocasmuertasA:brocasMA,
    brocasmuertasB: brocasMB,
    brocasmuertasC:brocasMC,
    brocasausentes:brocasAU,
   


},

});

var melo=traerEvaluacion(nombre, finca, lote, fecha);
$('#exampleBroca').DataTable().ajax.reload();
});


</script>
-->
<script>

  $(function(){

    $("#crearEvaluacion").appendTo("body");
  });
</script>

<script>

  $(function(){

    $("#GraficasConsultadasPOR").appendTo("body");
  });
</script>
<script>

  $(function(){

    $("#deleteEvaluacion").appendTo("body");
  });
</script>
<script>

  $(function(){

    $("#editEvalu").appendTo("body");
  });
</script>

<script>

  $(function(){

    $("#calculototal").appendTo("body");
  });
</script>

<script>

  $(function(){

    $("#datosEvaluacion").appendTo("body");
  });
</script>



<script>

  $(function(){

    $("#InfoAdmi").appendTo("body");
  });
</script>


<script>
    function calculo(){
    //show form Eliminar el usuario
 
    var arreglo=new Array();
   for(i=1;i<=9;i++)
{
    var total=0;
 
  $('table#exampleBroca tbody td:nth-child(' + i + ')').each(function (index) 
  {
    total += parseFloat($(this).text());  

  
  });
  $('table#exampleBroca tfoot th:nth-child(' + i + ')').text("Total: " + total)  

  arreglo[i]=total;

}
var porA=0;
var porB=0;
var porC=0;
var porMA=0;
var porMB=0;
var porMC=0;

var porMA=parseFloat(arreglo[6]/arreglo[2]);
var porMB=parseFloat(arreglo[7]/arreglo[2]);
var porMC=parseFloat(arreglo[8]/arreglo[2]);
var porMA=(porMA*100);
var porMB=(porMB*100);
var porMC=(porMC*100);

var porA=parseFloat(arreglo[3]/arreglo[2]);
var porB=parseFloat(arreglo[4]/arreglo[2]);
var porC=parseFloat(arreglo[5]/arreglo[2]);


var porAU=parseFloat(arreglo[9]/arreglo[2]);
var porAU= (porAU*100);
var porA=(porA*100);
var porB=(porB*100);
var porcentajedeinfestacion=0;
var sumainfestacion=0;
//suma de infestacion reune las vivas 
var sumainfestacion=parseFloat(porA+porB);
//suma de mortaldad reune las muertas 
var sumamortalidad=0;
//var porcentajemortalidad=0;
var sumamortalidad=parseFloat(porMA+porMB+porMC);
//var porcentajedeinfestacion=parseFloat(sumainfestacion/arreglo[2]);
//var porcentajedemortalidad=parseFloat(sumamortalidad/arreglo[2]);
  console.log(arreglo);
  console.log(porA);
   console.log(porB);
   
    console.log(porMA);
    console.log(porMB);
    console.log(porMB);
     $('#porcentaje').val(sumainfestacion);
          $('#porcentajeMO').val(sumamortalidad);
          $('#porcentajeAU').val(porAU);

        
    };

</script>

<script >
  function modalsitodatos(){
$('#datosEvaluacion').modal({backdrop: 'static', keyboard: false});
}

</script>

<script>
  function llenar(){



     var objFecha1= new Date;

var dia1=objFecha1.getDate();


if(dia1<10)
{

dia1=0+""+dia1;

}else
{

dia1=dia1;

}
var mes1=(objFecha1.getMonth()+1);

if(mes1<10)
{

  mes1=0+""+mes1;
}else{


  mes1=mes1;
}



 var z= objFecha.getFullYear()+"-"+mes1+"-"+dia1; 

var lotedatos=$('#loteDatos').val();

var nombre=$('#nombreevaluadorDatos').val();

//var registros=$('#registroDatos').val();
var fincaD=$('#fincaDatos').val();
var fechaDat=$('#fechadeevaluacionD').val();

if(lotedatos != ""  && nombre != ""  && fincaD !="" && fechaDat != "" && fechaDat==z) 
{
//$('#registroEva').val(registros);
$('#nombreevaluador').val(nombre);
$('#loteEva').val(lotedatos);
$('#fincaEva').val(fincaD);
$('#fechadeevaluacion').val(fechaDat);

mensajeSeguro();
$('#calculoEvaluacion').removeAttr("disabled");
$('#evaluacionbtn').removeAttr("disabled");


}else{


contenidoDatos="  Verifique los datos:"+
"\nVerifique que todas las casillas estén llenas"+ 
"\nVerifique que la fecha ingresada sea la actual es decir la fecha de hoy";
  mensajeMalo(contenidoDatos);


}



};



</script>

<script>


 function mensajeSeguro(){

   


swal({
  title: "Está seguro de que los datos ingresados para realizar la evaluación son correctos?",
  text: "Recuerde que los datos ingresados deben corresponder a la evaluación que realizará el día de hoy",
  icon: "info",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Muy bien! ahora puede empezar a realizar la evaluación", {
      icon: "success",
      
    });

  } else {

   
     modalsitodatos();
  }
});




      };

  </script>



  <script>
    $(document).ready(function (){

      $('.solo-numeros').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });

      $('.solo-letras').keyup(function (){
        this.value = (this.value + '').replace(/[^A-Za-z ñÑáéíóúÁÉÍÓÚ\s]+/g, '');
      });

    });
</script>



<script type="text/javascript">
    

    function borrarStorage(){




  localStorage.removeItem('datosrama');
}
</script>



<script>
function mensajebuenolayout(contenido)
{
swal({ title: 'Excelente!', text: contenido, icon: 'success', button: 'Entendido!'});



}




  </script>



  <script>

function mensajemalolayout(contenido)
{
swal({ title: 'Error!', text: contenido, icon: 'warning', button: 'Entendido!'});



}

  </script>
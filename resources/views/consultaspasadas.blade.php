@extends('layouts.layout2')
@section('title','Administrar Usuario')
@section('content')
<div>
<a href="{{ route('home') }}" style="color: #FFFFFF; ">INICIO -></a><a href="{{ route('evaluaciones.mostrar') }}" style="color: #FFFFFF; ">REALIZAR EVALUACIONES-></a><a href="{{ route('calculos.mostrar') }} " style="color: #FFFFFF; ">CONSULTAR EVALUACIONES PASADAS</a>
<br>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('CONSULTAR EVALUACIONES') }}</div>

                <div class="card-body">
           

          <div class="form-group">
   <select class="form-control" id="fincaEva" name="fincaEva"  disabled="" title="En este espacio se encuentra  el nombre de la finca en la que se realizó la evaluación">
 <option  selected hidden>Finca:*</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 
        <label for="cedula">Lote:*</label>
        <input type="text" class="form-control solo-numeros " id="loteConsulta" name="loteConsulta" title="Ingrese el número del lote en el cual se realizó la evaluación">
         <label for="cedula">Nombre:*</label>
        <input type="text" class="form-control solo-letras" id="nombreConsulta" name="nombreConsulta" title="Ingrese el nombre del evaluador que realizó la evaluación">
        <br>

        <div class="form-group">
                 <label for="apellidos">Fecha de la evaluación:*</label>
    <input type="text" class="datepicker-here"
     name="fechadeevaluacionConsulta" id="fechadeevaluacionConsulta"
     data-language="es" readonly="readonly" title="Ingrese la fecha en la que se realizó la evaluación">                  

             
                                </div>




 <button id="consultarEvaluacion" type="button" onclick=" traerEvaluacioncalculo()"class="btn btn-primary float-right" title="Oprima aquí para consultar la evaluación">Consultar evaluacion <i class="fas fa-search"></i> </button>


                	</div>
            </div>
        </div>
    </div>
</div>
</div>
<br>

<div class="container"id="containerConsulta" hidden="hidden" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header">{{ __('RESULTADOS DE LA EVALUACIÓN EN PORCENTAJE') }} <i class="fas fa-percentage"></i></div>  

                <div class="card-body">
            
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GraficasConsultadasPOR" onclick="DatosGraficasPOR()">Ver gráficas <i class="fas fa-eye"></i></button>
                     
                     <br>
                     <div class="table-responsive">
                        <table id="examplePorcentajes" class="table table-striped table-bordered" style="width:100%" title="Tabla con los resultados de los porcentajes de a evaluación">
                            <thead>
                                <tr>
                                        <th id="PI">Porcentaje de infestación</th>
                                    <th id="PM">Porcentaje de mortalidad</th>
                                    <th id="PA">Porcentaje de ausencia </th>
                                  
                                    
                                    
                                    
                                </tr>
                            </thead>
                           
                        </table>
       </div>
        
        

           

                        
                       


                                



                	</div>
            </div>
        </div>
    </div>
</div>
 <br>
<div class="container"id="containerConsultaDatos" hidden="hidden">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header">{{ __('DATOS RECOLECTADOS PARA LA EVALUACIÓN') }} <i class="fas fa-clock"></i></div>  

                <div class="card-body">
            

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GraficasConsultadas" onclick="DatosGraficas()">Ver gráficas <i class="fas fa-eye"></i></button>
<br>

<div class="table-responsive">
<table id="exampleConsulta" class="table table-striped table-bordered" style="width:100%" title="Tabla con los datos recolectados en campo para la evaluación">
                            <thead>
                                <tr>
                                        <th>Id</th>
                                    <th>Total Granos</th>
                                    <th>Brocas Vivas A</th>
                                    <th>Brocas Vivas B</th>
                                    <th>Brocas Vivas C</th>
                                     <th>Brocas Muertas A</th>
                                      <th>Brocas Muertas B</th>
                                      <th>Brocas Muertas C</th>
                                      <th>Brocas Ausentes</th>
                                     

                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody id="exampleConsultatbody">

                            </tbody>
                        </table>
                                
</div>


                	</div>
            </div>
        </div>
    </div>
</div>
  

@endsection 
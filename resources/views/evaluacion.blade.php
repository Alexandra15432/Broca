@extends('layouts.layout2')

@section('title','Administrar Usuario')
@section('content')

<div>
<a href="{{ route('home') }}" style="color: #FFFFFF; ">INICIO -></a><a href="{{route('evaluaciones.mostrar') }} " style="color: #FFFFFF; ">REALIZAR EVALUACIONES</a>
<br>
</div>
<br>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
          Evaluación
                    </div>
                    <div class="card-body">


                    
                      <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#datosEvaluacion" title="Oprima aquí para ingresar los datos de la evaluación" >Datos evaluacion <i class="fas fa-plus-square"></i></button>
                         
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearEvaluacion" id="evaluacionbtn" title="Oprima aquí para agregar los registros por rama de café" >Agregar registros <i class="fas fa-plus-square"></i></button>
                          <button type="button" class="btn btn-primary" id="calculoEvaluacion" onclick="calculo();" data-toggle="modal" data-target="#calculototal" title="Oprima aquí para obtener los resultados de la evaluación"> Calcular <i class="fas fa-calculator"></i></button>

                       
             <div class="table-responsive">
                        <table id="exampleBroca" class="table table-striped table-bordered" style="width:100%" title="Tabla con el resultado del conteo por rama">
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
                                      <th>Editar</th>
                                        

                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody id="exampleBrocatbody">

                            </tbody>
                        </table>
                      </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 


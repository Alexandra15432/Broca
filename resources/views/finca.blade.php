@extends('layouts.layout2')
@section('title','Administrar Finca')
@section('content')
<div>
<a href="{{ route('home') }}" style="color: #FFFFFF; ">INICIO -></a><a href="{{ route('finca.mostrar') }}"style="color: #FFFFFF; ">ADMINISTRAR FINCA</a>
<br>
</div>
<br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
            Administrar Finca
                    </div>
                    <div class="card-body">
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">        Agregar</button>-->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearFinca" title="Oprima el botón para agregar una nueva finca"> Agregar finca  <i class="fas fa-plus-square"></i></button>

            
                        <table id="example1" class="table table-striped table-bordered" style="width:100%" title="Tabla de registro de las fincas">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    
                                    <th>Nombre de la finca</th>
                                    <th>Direccion</th>
                                    <th>Municipio</th>
                                    <th>Editar</th>
                                        

                                    
                                    
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 


@extends('layouts.layout2')




@section('title','Administrar Usuario')
@section('content')
<div>
<a href="{{ route('home') }}" style="color: #FFFFFF; ">INICIO -></a><a href="{{ route('usuario.mostrar') }}" style="color: #FFFFFF; ">ADMINISTRAR USUARIO</a>
<br>
</div>
<br>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
            Administrar Usuario
                    </div>


                    
                    <div class="card-body">
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearEstudiante">        Agregar</button>-->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearEstudiante2" title="Oprima el botón para agregar un nuevo usuario"> Agregar usuario   <i class="fas fa-plus-square"></i> </button>
                         
             
                        <table id="example" class="table table-striped table-bordered" style="width:100%" title="Tabla de registro para los usuarios">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
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


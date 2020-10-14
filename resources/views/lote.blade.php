@extends('layouts.layout2')
@section('title','Administrar Lote')
@section('content')

<div>
<a href="{{ route('home') }}" style="color: #FFFFFF; ">INICIO -></a><a href="{{ route('lote.mostrar') }}"style="color: #FFFFFF; ">ADMINISTRAR LOTE</a>
<br>
</div>
<br>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
            Administrar Lote
                    </div>
                    <div class="card-body">
                         <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">        Agregar</button>-->

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearLote"title="Oprima el botón para agregar un nuevo lote a la tabla"> Agregar lote
                          <i class="fas fa-plus-square"></i>
                          </button>
                        
            
                        <table id="example2" class="table table-striped table-bordered" style="width:100%" title="Tabla de registros de los lotes">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    
                                    <th>Número del lote</th>
                                    <th>Finca a la que pertenece</th>
                                    <th>Extension</th>
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


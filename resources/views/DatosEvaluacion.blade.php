 

<form method="POST" action="#">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="modal fade" id="datosEvaluacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar datos de la evaluación</h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        
          </div>
      <div class="modal-body">





 
        <div class="form-group">
                                    <label for="apellidos">Nombre del Evaluador:*</label>
                                    <input type="text" class="form-control" id="nombreevaluadorDatos" name="nombreevaluadorDatos" placeholder="Ingresa el nombre completo del evaluador" readonly="readonly" value= '{{ Auth::user()->name }}' title="En este campo se encuentra el nombre del evaluador">
             
                                </div>  


                               <div class="form-group">

                                <label for="apellidos">Finca:*</label>
   <select class="form-control" id="fincaDatos" name="fincaDatos" title="Seleccione la finca en la cual se desea realizar la evaluación" >
 <option  selected hidden>Seleccione la finca</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 
                              


<div class="form-group">
                                    <label for="apellidos">Lote:*</label>
                                    <input type="text" class="form-control solo-numeros" id="loteDatos" name="loteDatos" placeholder="Ingrese el número del lote al cual le realizará la evaluación" title="Llene este campo con el número del lote en el cual realizará la evaluación">
             
                                </div>  




  


<div class="form-group">
                 <label for="apellidos">Fecha de la evaluación:*</label>
    <input type="text" class="datepicker-here"
     name="fechadeevaluacionD" id="fechadeevaluacionD"
     data-language="es" readonly="readonly" title="Seleccione la fecha de hoy para realizar la evaluación">                  

             
                                </div>                               
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" title="Oprima el botón para cerrar">Cerrar</button>
        <button id="confirmarRegistro" onclick="llenar()"type="button" class="btn btn-primary" data-dismiss="modal" title="Oprima el botón para confirmar los datos de la evaluación">Confirmar <i class="fas fa-check-circle"></i></button>
       
      </div>
    </div>
  </div>
</div>
 </form>
 

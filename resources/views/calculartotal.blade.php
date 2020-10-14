<div class="modal fullscreen-modal" tabindex="-1" role="dialog" id="calculototal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cálculos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 
        <div class="form-group">
                                    <label for="apellidos">Nombre del Evaluador:*</label>
                                    <input type="text" class="form-control" id="nombreevaluadorCal" name="nombreevaluadorCal" placeholder="Nombre del evaluador" readonly="readonly" value= '{{ Auth::user()->name }}' title="En este espacio se encuentra el nombre del evaluador">
             
                                </div>  


                             

<div class="form-group">
   <label for="apellidos">Nombre de la finca:*</label>
   <select class="form-control" id="fincaCal" name="fincaCal" disabled title="En este espacio se encuentra la finca en la cual se realizará la evaluación">
 <option  selected hidden>Finca en la que se realiza la evaluación</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 

<div class="form-group">
                                    <label for="apellidos">Lote:*</label>
                                    <input type="text" class="form-control" id="loteCal"name="loteCal" placeholder="Lote en el que se realizó la evaluación" readonly="readonly" title="En este espacio se encuentra  el número de lote en el que se realizará la evaluación">
             
                                </div>  

  

  <div class="form-group">
                                    <label for="apellidos">Fecha:*</label>
                                    <input type="text" class="form-control" id="fechaCal" name="fechaCal" placeholder="Fecha en la que se realiza la evaluación (hoy)" readonly="readonly" title="En este espacio se encuentra la fecha de hoy">
             
                                </div>  

        <label for="cedula">Porcentaje de infestación:*</label>
        <input type="text" class="form-control" id="porcentaje" name="porcentaje" readonly="readonly" title="En este espacio se úbica el porcentaje de infestación">
        <label for="cedula">Porcentaje de mortalidad:*</label>
        <input type="text" class="form-control" id="porcentajeMO" name="porcentajeMO"readonly="readonly"  title="En este espacio se úbica el porcentaje de motartalidad">
         <label for="cedula">Porcentaje de ausencia:*</label>
        <input type="text" class="form-control" id="porcentajeAU" name="porcentajeAU"readonly="readonly" title="En este espacio se úbica el porcentaje de ausencia">

<!-- para que no se dañe-->
<br>

 

    <div class="main-acordeon">
<div class="list-acordeon">
<div class="item-acordeon" title="Oprima aquí para ver los resultados de la evaluación representados en gráfica de barras">
<p class="btn-itm-acordeon " onclick="traergrafica()">Ver gráfica de barras <i class="fas fa-eye"></i></p>

<div class="item-content-acordeon">

 <canvas id="myChart" width="100" height="100"></canvas>
  </div>
</div>

<div class="item-acordeon" title="Oprima aquí para ver los resultados de la evaluación representados en gráfica circular">
<p class="btn-itm-acordeon " onclick="traergraficacircular()">Ver gráfica circular <i class="fas fa-eye"></i></p>

<div class="item-content-acordeon">

 <canvas id="myChart2" width="100" height="100"></canvas>
  
  
  </div>
</div>

<div class="item-acordeon" title="Oprima aquí para ver los resultados de la evaluación representados en gráfica en radar">
<p class="btn-itm-acordeon " onclick="traergraficaradar()">Ver gráfica Radar <i class="fas fa-eye"></i></p>

<div class="item-content-acordeon">

 <canvas id="myChart3" width="100" height="100"></canvas>
  
  
  </div>
</div>



</div>
</div>


<!-- para que no se dañe-->

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal" title="Oprima el botón para cerrar">Cerrar</button>
        <button type="button" class="btn btn-primary" title="Oprima para guardar los resultados de la evaluación en la base de datos"  onclick="guardarevaluacion()">Guardar Cálculos <i class="fas fa-save"></i></button>
      </div>
    </div>
  </div>
</div>
form method="POST" action="" id="#">
      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idIAE" value="" id="idIAE">
        
<div class="modal" id="InfoEva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información evaluador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

  <div class="main-acordeon">
<div class="list-acordeon">
<div class="item-acordeon">
<p class="btn-itm-acordeon ">¿A qué funcionalidades tiene acceso el Evaluador?</p>

<div class="item-content-acordeon">
<p>El Usuario Evaluador se Loguea, previamente debe de estar registrado en la aplicación 
<br>Accede con sus credenciales: Correo y contraseña 
<br>Se despliega la interfaz principal, la cual tiene dos actividades a realizar.
<br>1. Realizar evaluación 
<br>2. Consultar evaluaciones pasadas


</p>

  </div>
</div>

<div class="item-acordeon">
<p class="btn-itm-acordeon " >¿Cómo funciona la sección de Realizar Evaluación?</p>



<div class="item-content-acordeon">

 <p>  1.  En la pestaña realizar evaluación, se desplegará una tabla en la cual se podrá registrar los datos de la evaluación y realizar el monitoreo de infestación de la evaluación, en la parte superior de la tabla se encuentra 3 botones que se podrá efectuar las siguientes actividades: 
<br>Datos Evaluación
<br>Agregar Registros
<br>Calcular

<br>Para efectuar la evaluación se debe de realizar los siguientes pasos: 
<br>-Datos Evaluación: Se despliega un formulario en cual se debe completar con los datos de la finca 
Lote, finca y fecha. 
<br>-Agregar Registro: Se despliega un formulario para llenar la información sobre las ramas, datos numéricos.
<br>Total Granos, Brocas vivas en la posición A, Brocas vivas en la posición B, Brocas Vivas en la posición C, Brocas muertas en la posición A, Brocas muertas en la posición B, Brocas muertas en la posición C, y finalmente el número de brocas ausentes.
Posterior a eso, oprimen el botón Guardar datos y cerrar.
<br>-Calcular: Se despliega un formulario el cual mostrará en pantalla los cálculos realizados con los datos de la interfaz anterior, esto es el porcentaje de infestación, mortalidad y de ausencia, para mejor visualización se puede observar en modo gráficas, gráficas de barras, circular y radar. Luego presionan el botón Guardar Cálculos y cerrar. 

<br>Luego se llenará la tabla con la información anterior por lo que, se puede observar de manera más organizada la información calculada en los pasos anteriores, para su posterior consulta. 

</p>
  
  
  </div>
</div>

<div class="item-acordeon">
<p class="btn-itm-acordeon " >¿Cómo funciona la sección de consultar evaluaciones pasadas?</p>


<div class="item-content-acordeon">

<p>Para consultar evaluaciones pasadas, presionar en la parte superior, el formulario que se despliega, aparece como título: Finca, Lote, nombre y Fecha de la evaluación para hacer un filtrado de la información y buscar allí la información de evaluaciones pasadas. Y luego presionar el botón Consultar evaluación.  

  NOTA: para realizar una consulta pasada primero debe realizar una evaluación
</p>
  
  </div>
</div>



</div>
</div>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
 </form>
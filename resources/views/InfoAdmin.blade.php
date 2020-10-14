<form method="POST" action="" id="#">
      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idIAD" value="" id="idIAD">
        
<div class="modal" id="InfoAdmi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

  <div class="main-acordeon">
<div class="list-acordeon">
<div class="item-acordeon">
<p class="btn-itm-acordeon ">¿A qué funcionalidades tiene acceso el Administrador?</p>

<div class="item-content-acordeon">
<p>El usuario Administrador se loguea con sus respectivas credenciales: Correo y contraseña.
<br>Una vez acceda a la aplicación en la pantalla principal, puede realizar las siguientes actividades:

<br>1.Administrar Lote
<br>1.1 Crear Lote
<br>1.2 Modificar Lote
<br>1.3 Eliminar Lote
<br>1.4 Consultar Lote
<br>2. Administrar Finca
<br>2.1Crear Finca
<br>2.2 Modificar finca
<br>2.3 Eliminar Finca
<br>2.4 Consultar finca
<br>3.Adminsitrar Usuario
<br>3.1 Crear Usuario
<br>3.2 Modificar usuario
<br>3.3 Eliminar Usuario
<br>3.4 Consultar Usuario

</p>

  </div>
</div>

<div class="item-acordeon">
<p class="btn-itm-acordeon " >¿Cómo funciona la sección de administrar lote?</p>



<div class="item-content-acordeon">

 <p>  El usuario accede a la pestaña Administrar Lote
en el cual se despliega una pantalla que podrá agregar un nuevo registro (lote) que inmediatamente estará en la lista que aparece en la tabla y allí mismo podrá modificar y eliminar . 
</p>
  
  
  </div>
</div>

<div class="item-acordeon">
<p class="btn-itm-acordeon " >¿Cómo funciona la sección de administrar finca?</p>


<div class="item-content-acordeon">

<p>El usuario accede a la pestaña Administrar Finca 
en el cual se despliega una pantalla con una tabla en la cual se podrá crear una finca, y consultarla, modificarla y eliminarla solo presionando los botones correspondientes. 
</p>
  
  </div>
</div>

<div class="item-acordeon">
<p class="btn-itm-acordeon " >¿Cómo funciona la sección de administrar usuario?</p>


<div class="item-content-acordeon">

<p>El usuario accede a la pestaña Administrar Usuario
en el cual se despliega una pantalla con una tabla en la cual se podrá crear una finca, y consultarla, modificarla y eliminarla solo presionando los botones correspondientes.

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
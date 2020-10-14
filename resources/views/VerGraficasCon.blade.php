<form method="POST" action="" id="#">
      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idGF" value="" id="idGF">
        
<div class="modal" id="GraficasConsultadas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Porcentajes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" id="BroToTal"name="BroTotal" placeholder="Ingresa la direccion  de residencia del usuario" hidden="hidden">
              <input type="text" class="form-control" id="BroVIA"name="BroVIA" placeholder="Ingresa la direccion  de residencia del usuario" hidden="hidden">
               <input type="text" class="form-control" id="BroVIB"name="BroVIB" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
                <input type="text" class="form-control" id="BroVIC"name="BroVIC" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
                 <input type="text" class="form-control" id="BroMUA"name="BroMUA" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">

                  <input type="text" class="form-control" id="BroMUB"name="BroMUB" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
                   <input type="text" class="form-control" id="BroMUC"name="BroMUC" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
                    <input type="text" class="form-control" id="BroMAU"name="BroMUA" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
              <div>
<canvas id="myChart4" width="20" height="20"></canvas>

              </div>      
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
 </form>
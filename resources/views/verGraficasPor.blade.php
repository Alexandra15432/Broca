<form method="POST" action="" id="#">
      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idGFP" value="" id="idGFP">
        
<div class="modal" id="GraficasConsultadasPOR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Porcentajes Evaluación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" id="PorcenIN"name="PorcenIN" placeholder="Ingresa la direccion  de residencia del usuario" hidden="hidden">
              <input type="text" class="form-control" id="PorcenMOR"name="PorcenMOR" placeholder="Ingresa la direccion  de residencia del usuario" hidden="hidden">
             
                <input type="text" class="form-control" id="PorcenAU"name="PorcenAU" placeholder="Ingresa la direccion  de residencia del usuario"hidden="hidden">
                 <div>
<canvas id="myChart5" width="20" height="20"></canvas>

              </div>      
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
 </form>
<form method="POST" action="" id="deleteForm">
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idEliminarEva" value="" id="idEliminarEva">
        
<div class="modal" id="deleteEvaluacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar dato evaluación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <p>¿Seguro deseas eliminar este registro ?</p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button id="eliminarEvaluacion" type="button"  onclick ="eliminarEvaluacion()"class="btn btn-primary" data-dismiss="modal">Eliminar dato evaluacion</button>
      </div>
    </div>
  </div>
</div>
 </form>
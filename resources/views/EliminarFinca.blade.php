<form method="POST" action="" id="#">
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idEliminar1" value="" id="idEliminar1">
        
<div class="modal" id="deleteFinca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Finca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <p>¿Seguro desea eliminar este registro ?</p>
      <p>NOTA: Recuerde que para eliminar el registro de una finca primero debe eliminar todos los lotes que se relacionaron con la finca en el sistema</p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button id="eliminarFinca" type="button" class="btn btn-primary" data-dismiss="modal"  onclick="swal({ title: 'Excelente!', text: 'Se eliminó la finca exitosamente!', icon: 'success', button: 'Entendido!'})" title="Oprima el botón para eliminar el registro de la finca">Eliminar Finca <i class="fas fa-trash-alt"></i></button>
      </div>
    </div>
  </div>
</div>
 </form>
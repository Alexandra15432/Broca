<!-- Modal -->
<form method="POST" action="" id="#">
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idEliminar" value="" id="idEliminar">
        
<div class="modal" id="deleteUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <p>¿Seguro deseas eliminar este registro ?</p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button id="elimina" onclick="swal({ title: 'Excelente!', text: ' Se eliminó un usuario exitosamente!', icon: 'success', button: 'Entendido!'})" type="button" class="btn btn-primary" data-dismiss="modal" title="Oprima el botón para eliminar un usuario">Eliminar Usuario <i class="fas fa-trash-alt"></i></button>
      </div>
    </div>
  </div>
</div>
 </form>
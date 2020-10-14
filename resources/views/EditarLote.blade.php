<form method="POST" action="#">
   @method('PATCH')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
     <input type="hidden" name="idEditarLO" value="" id="idEditarLO">
    <div class="modal fade" id="editLote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Lote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body">
     
                      
                                
                            
                                 <div class="form-group">
                                    <label for="numerolote">Número de lote</label>
                                    <input type="text" class="form-control solo-numeros" id="numeroLO" name="numeroLO" title="Llene este campo con el número de lote a editar[0-9]" placeholder="Ingrese el nombre de la finca">
             
                                </div>     
  <label for="fincaLO">Finca a la que pertenece el lote</label>
  
                                        <div class="form-group">
   <select class="form-control" id="fincaLO" name="fincaLO"  title= " Seleccione el nombre de la finca a la que pertenece el lote ">
 <option  selected hidden>Seleccione la finca</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 
           


                                          <div class="form-group">
                                    <label for="extensionLO">Extension</label>
                                    <input type="text" class="form-control solo-numeros" id="extensionLO" name="extensionLO" placeholder="Ingresa la direccion de la finca" title=" Llene este campo con la extensión a editar que posee el lote [0-9]">
             
                                </div>  

 <!--

                            <label for="apellidos">Rol del usuario</label>
  
 
  

-->


     
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     <button type="button" id="editarLote"  class="btn btn-primary" title="Oprima el botón para actualizar el registro">Actualizar Lote <i class="fas fa-sync"></i></button>
      </div>
    </div>
  </div>
</div>
 </form>

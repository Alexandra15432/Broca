<form method="POST" action="grabrform">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="modal fade" id="crearLote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Lote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body">
     
                      
                                
                            
                                 <div class="form-group">
                                    <label for="numerolote">Número de lote:*</label>
                                    <input type="text" class="form-control solo-numeros" id="numeroL" name="numeroL" title="Llene este campo con el número de lote a registrar[0-9]" placeholder="Ingrese el número del lote">
             
                                </div>     
  <label for="fincaL">Finca a la que pertenece el lote:*</label>
  
                                        <div class="form-group">
   <select class="form-control" id="fincaL" name="fincaL" title= " Seleccione el nombre de la finca a la que pertenece el lote" >
 <option  selected hidden>Seleccione la finca</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 
                              

                                               

             
                               

                                          <div class="form-group">
                                    <label for="extension">Extension:*</label>
                                    <input type="text" class="form-control solo-numeros" id="extensionL" name="extensionL" placeholder="Ingresa la extensión del lote en metros" title=" Llene este campo con la extensión que posee el lote [0-9]">
             
                                </div>  

 <!--

                            <label for="apellidos">Rol del usuario</label>
  
 
  

-->


     
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" title ="Oprima este botón para cerrar"data-dismiss="modal">Cerrar</button>
        <button id="registroLote" type="button" 
class="btn btn-primary" data-dismiss="modal" title="Oprima este botón para guardar el lote a registar">Guardar Lote <i class="fas fa-save"></i></button>
       
      </div>
    </div>
  </div>
</div>
 </form>

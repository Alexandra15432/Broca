<form method="POST" action="" id="deleteForm">
 @method('PATCH')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idEditar1" value="" id="idEditar1">

<div class="modal" tabindex="-1"  id="editFinca" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar finca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 
                                
                            
                                 <div class="form-group">
                                    <label for="apellidos">Nombres de la finca</label>
                                    <input type="text" class="form-control solo-letras" id="nombresFI" name="nombresFI" placeholder="Ingrese el nombre de la finca" title="LLene este campo con el nombre de la finca [Aa-Zz]] a editar">
             
                                </div>     

                                        
                              

                                               

             
                               

                                          <div class="form-group">
                                    <label for="apellidos">Direccion</label>
                                    <input type="text" class="form-control" id="direccionFI" name="direccionFI" title="Llene este campo con la dirección a la que pertenece la finca" placeholder="Ingresa la direccion de la finca">
             
                                </div>  
<!--
                                  <div class="form-group">
                                    <label for="apellidos">Municipio</label>
                                    <input type="text" class="form-control" id="municipioFI" name="municipioFI" placeholder="Ingresa el municipio donde se encuentre la finca">
             
                               

                                 

                                 
                            </div>
 -->

                     <div class="form-group">
   <select class="form-control" id="municipioFI"  name="tipoderol" title="Seleccione el municipio en el cual se encuentra ubicado la finca" >
 <option  selected >Seleccione municipio</option>

    
  

<option value="Cali">Cali</option>
 <option value="Alcala">Alcala</option>
 <option value="Andalucia">Andalucia</option> 
<option value="Ansermanuevo">Ansermanuevo</option>
 <option value="Bolivar">Bolivar</option>
 <option value="Buenaventura">Buenaventura</option>
 <option value="Bugalagrande">Bugalagrande</option>
 <option value="Caicedonia">Caicedonia</option>
 <option value="Calima el Darien">Calima el Darien</option>
 <option value="Candelaria">Candelaria</option>
 <option value="Cartago">Cartago</option>
 <option value="Dagua">Dagua</option>
 <option value="El Aguila">El Aguila</option>
 <option value="El Cairo">El Cairo</option>
<option value="El Cerrito">El Cerrito</option>
<option value="El Dovio">El Dovio</option>
<option value="Florida">Florida</option>
<option value="Ginebra">Ginebra</option>
<option value="Guadalajara de Buga">Guadalajara de Buga</option>
<option value="Jamundi">Jamundi</option>
<option value="La Cumbre">La Cumbre</option>
<option value="La Union">La Union</option>
<option value="La Victoria">La Victoria</option>
<option value="Obando">Obando</option>
<option value="Palmira">Palmira</option>

<option value="Pradera">Pradera</option>
<option value="Restrepo">Restrepo</option>
<option value="Riofrio">Riofrio</option>
<option value="Roldanillo">Roldanillo</option>
<option value="S Juan Bautista de Guacari">S Juan Bautista de Guacari</option>
<option value="San Pedro">San Pedro</option>
<option value="Sevilla">Sevilla</option>

<option value="Toro">Toro</option>
<option value="Trujillo">Trujillo</option>
<option value="Tulua">Tulua</option>
<option value="Ulloa">Ulloa</option>

<option value="Versalles">Versalles</option>
<option value="Vijes">Vijes</option>
<option value="Yotoco">Yotoco</option>
<option value="Yumbo">Yumbo</option>
<option value="Zarzal">Zarzal</option>
 
 
</select>   
  </div> 


     
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="editarFinca"  class="btn btn-primary" title="Oprima el botón para actualizar el registro de la finca">Actualizar Finca <i class="fas fa-sync"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
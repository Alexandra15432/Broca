<!-- Modal -->
<form method="POST" action="" id="deleteForm">
 @method('PATCH')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="idEditar" value="" id="idEditar">
        
      <div class="modal" id="editUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">          
                       <div class="col-sm">
                                <div class="form-group">
                                    <label for="cedula">Cedula</label>
                                    <input type="text" class="form-control solo-numeros " id="cedula1" name="cedula1" placeholder="Ingresa el número de cedula del evaluador" title="Llene este campo con el número de cédula del usuario a editar [0-9]">
                                   
                                </div>
                                   <div class="form-group">
                                  <label for="name">{{ __('Nombre') }}</label>

                            <div class="col-sm">
                                <input id="name1" type="text" class="form-control solo-letras @error('name1') is-invalid @enderror" name="name1" value="{{ old('name') }}" required autocomplete="name1" autofocus title="Llene este campo con el nombre del usuario a editar [Aa-Zz]">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>


<div class="form-group">
                           <label for="email" >{{ __('Dirección de correo electrónico') }}</label>

                            <div class="col-sm">
                                <input id="email1" type="email" class="form-control @error('email1') is-invalid @enderror" name="email1" value="{{ old('email1') }}" required autocomplete="email1" title="Llene este campo con la dirección del correco electrónico del usuario a editar">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             </div>



                             

                                 <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control solo-letras" id="apellidos1" name="apellidos1" placeholder="Ingresa los apellidos del evaluador" title="Llene el campo con los apellidos del usuario a editar[Aa-Zz]">
             
                                </div>     

                                        
                              

                                 <div class="form-group">
                 <label for="apellidos">Fecha de nacimiento</label>
    <input type="text" class="datepicker-here"
     name="fechadenacimiento1" id="fechadenacimiento1"
     data-language="es" readonly="readonly" title="Seleccione la fecha de nacimiento del usuario a editar">                  

             
                                </div>

  <div class="form-group">
                                    <label for="apellidos">Direccion</label>
                                    <input type="text" class="form-control" id="direccion1" name="direccion1" placeholder="Ingresa la direccion  de residencia del evaluador"  title="Llene este campo con la dirección perteneciente al usuario a editar">
             
                                </div>  
<!--
                                  <div class="form-group">
                                    <label for="apellidos">Municipio</label>
                                    <input type="text" class="form-control" id="municipio1" name="municipio1" placeholder="Ingresa el municipio de residencia">
             
                               

                                 

                                 
                            </div>


-->

<div class="form-group">
   <select class="form-control" id="municipio1"  name="tipoderol"  title ="Seleccione el municipio en el cual vive del usuario a editar" >
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



                            <label for="apellidos">Rol del usuario</label>
  
  
  <div class="form-group">
   <select class="form-control" id="tipoderol1" name="tipoderol1"  title="Seleccione el rol del usuario a editar" >
 <option  selected hidden>Seleccione el tipo de rol</option>

     @foreach($tipoevaluadores as $tipoevaluador)
  <option value="{{$tipoevaluador->id}}">{{$tipoevaluador->nombre}}</option>
  @endforeach

</select>   
  </div> 




     
      </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" title="Oprima el botón para cerrar">Cerrar</button>
              <button id="editar" type="button" o class="btn btn-primary" data-dismiss="modal" title="Oprima el botón para actualizar un nuevo usuario">Actualizar Usuario  <i class="fas fa-sync"></i> </button>
            </div>
          </div>
        </div>
      </div>
 </form>

<!-- Este modal fue extraido de esta https://getbootstrap.com/docs/4.0/components/modal/-->
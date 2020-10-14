<!-- Modal -->
<form method="POST" action="#" id="formularioevaluacion">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="modal fade" id="crearEvaluacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar  número de granos por rama</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body" id="bodyevaluacion">
   
        <div class="form-group">
                                    <label for="apellidos">Nombre del Evaluador:*</label>
                                    <input type="text" class="form-control" id="nombreevaluador" name="nombreevaluador" placeholder="Ingresa la direccion  de residencia del usuario" readonly="readonly" value= '{{ Auth::user()->name }}' title="En este espacio se encuentra el nombre del evaluador">
             
                                </div>  


                             


 
<label for="apellidos">Finca:*</label>
   <div class="form-group">
   <select class="form-control" id="fincaEva" name="fincaEva"  title="En este espacio se encuentra la finca en la cual se realizará la evaluación"disabled>
 <option  selected hidden>Finca a la que se le realizará la evaluación:</option>

     @foreach($fincas as $finca)
  <option value="{{$finca->id}}">{{$finca->nombre}}</option>
  @endforeach

</select>   
  </div> 
<div class="form-group">
                                    <label for="apellidos">Lote:*</label>
                                    <input type="text" class="form-control" id="loteEva" name="loteEva" placeholder="Número de lote al que se le realizará la evaluación" readonly="readonly" title="En este espacio se encuentra  el número de lote en el que se realizará la evaluación">
             
                                </div> 

<div class="form-group">
                 <label for="apellidos">Fecha de la evaluación:*</label>
    <input type="text" class="form-control"
     name="fechadeevaluacion" id="fechadeevaluacion"
     data-language="es" readonly="readonly" title="En este espacio se encuentra la fecha de hoy">                  

             
                                </div>


        <div class="main-acordeon">
        <div class="list-acordeon">
          
     
                            <div class="col-sm">

                               <div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Total Granos:*</p>
                                  <div class="item-content-acordeon">
                                <div class="form-group">
                                
                                    <label for="cedula">Total Granos:*</label>
                                    <input type="text" class="form-control" id="totalgranos" name="totalgranos" placeholder="Ingrese el número total de granos" readonly="readonly" title="Llene este campo con el número de granos obtenidos del conteo">
                                   
                                </div>


                                  <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoTG()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosTG()">2</button></td>
<td><button  class="btn btn-outline-success"  onclick="tresTG()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroTG()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoTG()">5</button></td>
<td><button class="btn btn-outline-success"  onclick="seisTG()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteTG()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoTG()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveTG()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroTG()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarTG()"> &#8592</button></td>

</tr>


</table>        

                              </div>
                            </div>



                                 
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas vivas A:*</p>
                                  <div class="item-content-acordeon">

                                   <div class="form-group">
                                  <label for="name">{{ __('Brocas vivas A') }}</label>

                            <div class="col-sm">
                                <input id="brocasVA" type="text" class="form-control @error('name') is-invalid @enderror" name="brocasVA" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese el número total de brocas vivas A"autofocus readonly="readonly" title="Llene este campo con el número de  granos con brocas vivas en la posición A">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>


<table class="teclado">

<tr>
<td><button class="btn btn-outline-success"id="uno" onclick="unoVA()">1</button></td>
<td><button class="btn btn-outline-success"id="dos"  onclick="dosVA()">2</button></td>
<td><button  class="btn btn-outline-success" id="tres"  onclick="tresVA()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success" id="cuatro"  onclick="cuatroVA()">4</button></td>
<td><button class="btn btn-outline-success" id="cinco"  onclick="cincoVA()">5</button></td>
<td><button class="btn btn-outline-success" id="seis"  onclick="seisVA()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success" id="siete"  onclick="sieteVA()">7</button></td>
<td><button class="btn btn-outline-success"id="ocho"  onclick="ochoVA()">8</button></td>
<td><button class="btn btn-outline-success" id="nueve"  onclick="nueveVA()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success" id="cero"  onclick="ceroVA()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarVA()"id="borrar"> &#8592</button></td>

</tr>


</table>        


                        </div>
                      </div>
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas vivas B:*</p>
                                  <div class="item-content-acordeon">

<div class="form-group" >
                           <label for="email">{{ __('Brocas Vivas B') }}</label>

                            <div class="col-sm">
                                <input id="brocasVB" type="text" class="form-control @error('email') is-invalid @enderror" name="brocasVB" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese el número total de brocas vivas B" readonly="readonly" title="Llene este campo con el número de  granos con brocas vivas en la posición B">
                                <br>


<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="uno()">1</button></td>
<td><button class="btn btn-outline-success " onclick="dos()">2</button></td>
<td><button  class="btn btn-outline-success" onclick="tres()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success" onclick="cuatro()" >4</button></td>
<td><button class="btn btn-outline-success" onclick="cinco()">5</button></td>
<td><button class="btn btn-outline-success" onclick="seis()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success" onclick="siete()" >7</button></td>
<td><button class="btn btn-outline-success" onclick="ocho()">8</button></td>
<td><button class="btn btn-outline-success"  onclick="nueve()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success" onclick="cero">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrar"> &#8592</button></td>

</tr>


</table>



                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             </div>
</div>
</div>


<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas vivas C:*</p>
                                  <div class="item-content-acordeon">
                             


                                 <div class="form-group">
                                    <label for="apellidos">Brocas Vivas C</label>
                                    <input type="text" class="form-control" id="brocasVC" name="apellidos" placeholder="Ingrese el número total de brocas vivas C" readonly="readonly" title="Llene este campo con el número de  granos con brocas vivas en la posición C">
             
                                </div> 


                                <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoC()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosC()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresC()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"  onclick="cuatroC()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoC()">5</button></td>
<td><button class="btn btn-outline-success"  onclick="seisC()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteC()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoC()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveC()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroC()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarC()"> &#8592</button></td>

</tr>


</table>                                   
                                </div>
                                </div> 

                                        
                              

                                
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas A:*</p>
                                  <div class="item-content-acordeon">
  <div class="form-group">
                                    <label for="apellidos">Brocas Muertas A</label>
                                    <input type="text" class="form-control" id="brocasMA" name="direccion" placeholder="Ingrese el número total de brocas muertas de tipo A" readonly="readonly" title="Llene este campo con el número de  granos con brocas muertas en la posición A">
             
                                </div>  




                                <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMA()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosMA()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMA()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"  onclick="cuatroMA()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoMA()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisMA()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMA()">7</button></td>
<td><button class="btn btn-outline-success" onclick="ochoMA()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveMA()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success" id="cero"  onclick="ceroMA()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMA()"id="borrar"> &#8592</button></td>

</tr>


</table>    




                              </div>
                            </div>

                            <div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas B:*</p>
                                  <div class="item-content-acordeon">


                                  <div class="form-group">
                                    <label for="apellidos">Brocas Muertas B</label>
                                    <input type="text" class="form-control" id="brocasMB" name="brocasMB" placeholder="Ingrese el número total de brocas muertas de tipo B"  readonly="readonly" title="Llene este campo con el número de  granos con brocas muertas en la posición B">
             
                               

                                 

                                 
                            </div>



                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMB()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosMB()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMB()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroMB()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoMB()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisMB()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMB()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoMB()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveMB()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroMB()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMB()"> &#8592</button></td>

</tr>


</table>    





                          </div>
                        </div>


<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas C:*</p>
                                  <div class="item-content-acordeon">
                             <div class="form-group">
                                    <label for="apellidos">Brocas Muertas C</label>
                                    <input type="text" class="form-control" id="brocasMC" name="brocasMC" placeholder="Ingrese el número total de brocas muertas de tipo C" readonly="readonly" title="Llene este campo con el número de  granos con brocas muertas en la posición C">
             
                               

                                 

                                 
                            </div>



                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMC()">1</button></td>
<td><button class="btn btn-outline-success" onclick="dosMC()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMC()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroMC()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoMC()">5</button></td>
<td><button class="btn btn-outline-success"  onclick="seisMC()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMC()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoMC()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveMC()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroMC()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMC()"> &#8592</button></td>

</tr>


</table>                       
                          </div>
                        </div>


<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Ausentes:*</p>
                                  <div class="item-content-acordeon">


  <div class="form-group">
                                    
                                    
                                    <label for="apellidos">Brocas Ausentes</label>
                                    <input type="text" class="form-control" id="brocasAU" name="brocasAU" placeholder="Ingrese el número total de brocas ausentes" readonly="readonly" title="Llene este campo con el número de  granos con brocas ausentes">
             
                               

                                 

                                 
                            </div> 





                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success"onclick="unoAU()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosAU()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresAU()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroAU()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoAU()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisAU()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteAU()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoAU()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveAU()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroAU()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarAU()"> &#8592</button></td>

</tr>


</table>        

                          </div>
                        </div>
                               

                                 

                                 
                      

                            




     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" title="Oprima el botón para cerrar">Cerrar</button>
        <button id="registroEvaluacion" type="button" class="btn btn-primary" data-dismiss="modal" title="Oprima el botón para guardar el dato de los granos contados por rama">Guardar dato evaluación  <i class="fas fa-save"></i></button>
       
      </div>
</div>
    </div>
    </div>
  </div>
</div>
 </form>

  

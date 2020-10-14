<form method="POST" action="#" id="formularioevaluacion">
    <input type="hidden" name="_token12" value="{{ csrf_token() }}" id="token12">
    <div class="modal fade" id="editEvalu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar número de granos por rama</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body">
 
                                 <input type="text" class="form-control" id="ideditarl" name="ideditarl" placeholder="Ingrese el número total de granos" readonly="readonly" hidden="hidden">


        <div class="main-acordeon">
        <div class="list-acordeon">
          
     
                            <div class="col-sm">

                               <div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Total Granos</p>
                                  <div class="item-content-acordeon">
                                <div class="form-group">
                                
                                    <label for="cedula">Total Granos</label>
                                    <input type="text" class="form-control" id="totalgranosl" name="totalgranosl" placeholder="Ingresa el número total de granos" readonly="readonly">
                                   
                                </div>


                                  <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoTGl()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosTGl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresTGl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"  onclick="cuatroTGl()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoTGl()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisTGl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteTGl()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoTGl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveTGl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"  onclick="ceroTGl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarTGl()"> &#8592</button></td>

</tr>


</table>        

                              </div>
                            </div>



                                 
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas vivas A</p>
                                  <div class="item-content-acordeon">

                                   <div class="form-group">
                                  <label for="name">{{ __('Brocas vivas A') }}</label>

                            <div class="col-sm">
                                <input id="brocasVAl" type="text" class="form-control @error('name') is-invalid @enderror" name="brocasVAl" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese el número total de brocas vivas A"autofocus readonly="readonly">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>


<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoVAl()">1</button></td>
<td><button class="btn btn-outline-success" onclick="dosVAl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresVAl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success" onclick="cuatroVAl()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoVAl()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisVAl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success" onclick="sieteVAl()">7</button></td>
<td><button class="btn btn-outline-success" onclick="ochoVAl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveVAl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"  onclick="ceroVAl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarVAl()"> &#8592</button></td>

</tr>


</table>        


                        </div>
                      </div>
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas vivas B</p>
                                  <div class="item-content-acordeon">

<div class="form-group" >
                           <label for="email">{{ __('Brocas Vivas B') }}</label>

                            <div class="col-sm">
                                <input id="brocasVBl" type="text" class="form-control @error('email') is-invalid @enderror" name="brocasVBl" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese el número total de brocas vivas B" readonly="readonly">
                                <br>


<table class="teclado">

<tr>
<td><button class="btn btn-outline-success"onclick="unol()">1</button></td>
<td><button class="btn btn-outline-success " onclick="dosl()">2</button></td>
<td><button  class="btn btn-outline-success" onclick="tresl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success" onclick="cuatrol()" >4</button></td>
<td><button class="btn btn-outline-success" onclick="cincol()">5</button></td>
<td><button class="btn btn-outline-success" onclick="seisl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success" onclick="sietel()" >7</button></td>
<td><button class="btn btn-outline-success" onclick="ochol()">8</button></td>
<td><button class="btn btn-outline-success"  onclick="nuevel()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success" onclick="cerol()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarl()"> &#8592</button></td>

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
                                  <p class="btn-itm-acordeon ">Brocas vivas C</p>
                                  <div class="item-content-acordeon">
                             


                                 <div class="form-group">
                                    <label for="apellidos">Brocas Vivas C</label>
                                    <input type="text" class="form-control" id="brocasVCl" name="brocasVCl" placeholder="Ingrese el número total de brocas vivas C" readonly="readonly">
             
                                </div> 


                                <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoCl()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosCl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresCl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroCl()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoCl()">5</button></td>
<td><button class="btn btn-outline-success" onclick="seisCl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteCl()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoCl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveCl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroCl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarCl()"id="borrar"> &#8592</button></td>

</tr>


</table>                                   
                                </div>
                                </div> 

                                        
                              

                                
<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas A</p>
                                  <div class="item-content-acordeon">
  <div class="form-group">
                                    <label for="apellidos">Brocas Muertas A</label>
                                    <input type="text" class="form-control" id="brocasMAl" name="direccion" placeholder="Ingrese el número total de brocas muertas de tipo A" readonly="readonly">
             
                                </div>  




                                <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMAl()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosMAl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMAl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroMAl()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoMAl()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisMAl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMAl()">7</button></td>
<td><button class="btn btn-outline-success" onclick="ochoMAl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveMAl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroMAl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMAl()"> &#8592</button></td>

</tr>


</table>    




                              </div>
                            </div>

                            <div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas B</p>
                                  <div class="item-content-acordeon">


                                  <div class="form-group">
                                    <label for="apellidos">Brocas Muertas B</label>
                                    <input type="text" class="form-control" id="brocasMBl" name="brocasMBl" placeholder="Ingrese el número total de brocas muertas de tipo B"  readonly="readonly">
             
                               

                                 

                                 
                            </div>



                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMBl()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosMBl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMBl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroMBl()">4</button></td>
<td><button class="btn btn-outline-success"   onclick="cincoMBl()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisMBl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMBl()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoMBl()">8</button></td>
<td><button class="btn btn-outline-success" onclick="nueveMBl()">9</button></td>
<tr>
  <td></td>
<td><button class="btn btn-outline-success"   onclick="ceroMBl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMBl()"> &#8592</button></td>
</tr>

</tr>


</table>    





                          </div>
                        </div>


<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Muertas C</p>
                                  <div class="item-content-acordeon">
                             <div class="form-group">
                                    <label for="apellidos">Brocas Muertas C</label>
                                    <input type="text" class="form-control" id="brocasMCl" name="brocasMCl" placeholder="Ingrese el número total de brocas muertas de tipo C" readonly="readonly">
             
                               

                                 

                                 
                            </div>



                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoMCl()">1</button></td>
<td><button class="btn btn-outline-success" onclick="dosMCl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresMCl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"  onclick="cuatroMCl()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoMCl()">5</button></td>
<td><button class="btn btn-outline-success"  onclick="seisMCl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteMCl()">7</button></td>
<td><button class="btn btn-outline-success" onclick="ochoMCl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveMCl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroMCl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarMCl()"> &#8592</button></td>

</tr>


</table>                       
                          </div>
                        </div>


<div class="item-acordeon">
                                  <p class="btn-itm-acordeon ">Brocas Ausentes</p>
                                  <div class="item-content-acordeon">


  <div class="form-group">
                                    
                                    
                                    <label for="apellidos">Brocas Ausentes</label>
                                    <input type="text" class="form-control" id="brocasAUl" name="brocasAUl" placeholder="Ingrese el número total de brocas ausentes" readonly="readonly">
             
                               

                                 

                                 
                            </div> 





                             <br>




<table class="teclado">

<tr>
<td><button class="btn btn-outline-success" onclick="unoAUl()">1</button></td>
<td><button class="btn btn-outline-success"  onclick="dosAUl()">2</button></td>
<td><button  class="btn btn-outline-success"   onclick="tresAUl()">3</button></td>

</tr>
<tr>
<td><button class="btn btn-outline-success"   onclick="cuatroAUl()">4</button></td>
<td><button class="btn btn-outline-success"  onclick="cincoAUl()">5</button></td>
<td><button class="btn btn-outline-success"   onclick="seisAUl()">6</button></td>

</tr>

<tr>
<td><button class="btn btn-outline-success"   onclick="sieteAUl()">7</button></td>
<td><button class="btn btn-outline-success"  onclick="ochoAUl()">8</button></td>
<td><button class="btn btn-outline-success"   onclick="nueveAUl()">9</button></td>

</tr>

<tr>
<td></td>
<td><button class="btn btn-outline-success"   onclick="ceroAUl()">0</button></td>
<td><button class="btn btn-outline-success" onclick="borrarAUl()"> &#8592</button></td>

</tr>


</table>        

                          </div>
                        </div>
                               

                                 

                                 
                      

                            




     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="editEvaluacionl" type="button" class="btn btn-primary" data-dismiss="modal">Editar dato evaluación</button>
       
      </div>
</div>
    </div>
    </div>
  </div>
</div>
 </form>

  

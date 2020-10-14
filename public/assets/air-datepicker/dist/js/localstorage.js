

const formularioUI= document.querySelector('#bodyevaluacion');

const tabla=document.querySelector('#exampleBrocatbody');
let arrayevaluaciones=[];



 var objFecha= new Date;

var dia=objFecha.getDate();


if(dia<10)
{

dia=0+""+dia;

}else
{

dia=dia;

}
var mes=(objFecha.getMonth()+1);

if(mes<10)
{

  mes=0+""+mes;
}else{


  mes=mes;
}



 var o= objFecha.getFullYear()+"-"+mes+"-"+dia; 
 



const CrearItem=(nombreevaluador, loteEva, fincaEva, fechadeevaluacion, totalgranos,brocasVA, brocasVB, brocasVC, brocasMA, brocasMB, brocasMC, brocasAU)=>{


console.log("este es el localStorage"+nombreevaluador);

let item ={

nombreevaluador:nombreevaluador,
loteEva:loteEva,
fincaEva:fincaEva,
fechadeevaluacion:fechadeevaluacion,
totalgranos:totalgranos,
brocasVA:brocasVA,
brocasVB: brocasVB,  
brocasVC:brocasVC,
brocasMA:brocasMA,
brocasMB:brocasMB,

  brocasMC:brocasMC,
    brocasAU:brocasAU


}
arrayevaluaciones.push(item);
console.log(arrayevaluaciones);
return item;



}


const GuardarDB=()=>{


 localStorage.setItem('datosrama', JSON.stringify(arrayevaluaciones));
 PintarDB();
 LlenarCampos();


 
}

const PintarDB= () =>{


tabla.innerHTML='';

arrayevaluaciones=JSON.parse(localStorage.getItem('datosrama'));

if(arrayevaluaciones=== null)
{

arrayevaluaciones=[];

}else{

arrayevaluaciones.forEach((element, index ) =>{

tabla.innerHTML += `<tbody><tr><td>${index}</td><td>${element.totalgranos}</td><td>${element.brocasVA}</td><td>${element.brocasVB}</td><td>${element.brocasVC}</td><td>${element.brocasMA}</td><td>${element.brocasMB}</td><td>${element.brocasMC}</td><td>${element.brocasAU}</td><td> <button type="button" class="btn btn-warning btn-sm edit-eva" data-toggle="modal"id="editarEvaluacion" data-target="#editEvalu"><i class="fas fa-edit"></i></button><button type="button" class="btn btn-danger btn-sm delete-eva" data-toggle="modal"id="eliminarEvaluacion" data-target="#deleteEvaluacion"><i class="fas fa-trash-alt"></i></button></td></tr></tbody>`
});


}

}

const LlenarCampos= () =>{





arrayevaluaciones=JSON.parse(localStorage.getItem('datosrama'));
 var loteE=arrayevaluaciones[0].loteEva;
 var fincaE=arrayevaluaciones[0].fincaEva;
 var nombreE=arrayevaluaciones[0].nombreevaluador;
 var fechaE= arrayevaluaciones[0].fechadeevaluacion;

console.log(arrayevaluaciones);

$('#nombreevaluador').val(nombreE);
$('#loteEva').val(loteE);
$('#fincaEva').val(fincaE);
$('#fechadeevaluacion').val(fechaE);


$('#nombreevaluadorCal').val(nombreE);
$('#loteCal').val(loteE);
$('#fincaCal').val(fincaE);
$('#fechaCal').val(fechaE);


}


$('#registroEvaluacion').click(function(e){
  console.log("Entró");

  e.preventDefault();
let nombreevaluadorUI=document.querySelector('#nombreevaluador').value;

let loteEvaUI=document.querySelector('#loteEva').value;
console.log("este es el lote:"+loteEvaUI )
let fincaEvaUI=document.querySelector('#fincaEva').value;
let fechadeevaluacionUI=document.querySelector('#fechadeevaluacion').value;
let totalgranosUI=document.querySelector('#totalgranos').value;
let brocasVAUI= parseInt(document.querySelector('#brocasVA').value);
let brocasVBUI= parseInt(document.querySelector('#brocasVB').value);
let brocasVCUI= parseInt(document.querySelector('#brocasVC').value);
let brocasMAUI= parseInt(document.querySelector('#brocasMA').value);
let brocasMBUI= parseInt(document.querySelector('#brocasMB').value);
let brocasMCUI= parseInt(document.querySelector('#brocasMC').value);
let brocasAUUI= parseInt(document.querySelector('#brocasAU').value);


let sumabrocas=0;
 sumabrocas= parseInt(brocasVAUI + brocasVCUI+ brocasVBUI + brocasMAUI + brocasMBUI + brocasMCUI + brocasAUUI);
                
console.log("mostrar suma"+sumabrocas);
                if(fechadeevaluacionUI !="" &&  fincaEvaUI !="" && loteEvaUI !="" && nombreevaluadorUI !="" && totalgranosUI!="" && brocasVAUI != ""   && brocasVBUI!= "" && brocasVCUI !="" &&  brocasMAUI!= "" &&  brocasMBUI != ""
              &&   brocasMCUI != "" &&  brocasAUUI!= "" &&totalgranosUI>=sumabrocas && fechadeevaluacionUI == o)
                {

CrearItem(nombreevaluadorUI, loteEvaUI, fincaEvaUI, fechadeevaluacionUI,totalgranosUI,brocasVAUI, brocasVBUI, brocasVCUI,brocasMAUI, brocasMBUI, brocasMCUI, brocasAUUI );
GuardarDB();
var otromess="Los datos de la rama se ingresaron correctamente a la tabla de datos";
mensajeBueno(otromess);

$('#totalgranos').val("");
$('#brocasVA').val("");
$('#brocasVB').val("");
$('#brocasVC').val("");
$('#brocasMA').val("");

$('#brocasMB').val("");
$('#brocasMC').val("");
$('#brocasAU').val("");


 }else{

           var brocamensaje= "Verifique los datos ingresados:"+
           "\n -Verifique que las  casillas no estén vacías"+
           "\n- Verifique que todas las casillas estén llenas con el respectivo número de granos café contados por rama."+
           "\n- Verifique que el número total de granos sea mayor a la suma de todos los granos de café contados por rama ingresados en cada una de las casillas.";
            mensajeMalo(brocamensaje);



           }







});

document.addEventListener('DOMContentLoaded',  LlenarCampos);
document.addEventListener('DOMContentLoaded', PintarDB);

    //show form Eliminar el usuario


    $(document).ready(function(){
      
        $(".edit-eva").click(function(){
 
            var valores=new Array();
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            var i=0;
            $(this).parents("tr").find("td").each(function(){
                valores[i]=$(this).html();
                i++;
            });
        $('#ideditarl').val(valores[0]);
           $('#totalgranosl').val(valores[1]);
           $('#brocasVAl').val(valores[2]);
           $('#brocasVBl').val(valores[3]);
           $('#brocasVCl').val(valores[4]);
           $('#brocasMAl').val(valores[5]);
           $('#brocasMBl').val(valores[6]);
           $('#brocasMCl').val(valores[7]);
           $('#brocasAUl').val(valores[8]);

      
        });



        $(".delete-eva").click(function(){
 
            var valores=new Array();
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            var i=0;
            $(this).parents("tr").find("td").each(function(){
                valores[i]=$(this).html();
                i++;
            });
        $('#idEliminarEva').val(valores[0]);
           

      
        });
    });


    
      $(function(){
        //actualizar

       $('#editEvaluacionl').click( function(){
            var idEditar = $('#ideditarl').val();
           
            var totalgranosl =parseInt( 
              $('#totalgranosl').val());
         
             var brocasVAl=parseInt($('#brocasVAl').val());
               var brocasVBl= parseInt($('#brocasVBl').val());
             
            var brocasVCl = parseInt($('#brocasVCl').val());
            var brocasMAl = parseInt($('#brocasMAl').val());
            var brocasMBl = parseInt($('#brocasMBl').val());
            var brocasMCl = parseInt($('#brocasMCl').val());
                var brocasAUl = parseInt($('#brocasAUl').val());




var sumaedit= parseInt(brocasVAl+brocasVBl+brocasVCl+brocasMAl+brocasMBl+brocasMCl+brocasAUl);
console.log("sumaedit="+sumaedit);
if( totalgranosl != "" && brocasVAl!="" && brocasVBl!="" && brocasVCl !="" && brocasMAl!="" && brocasMBl !="" && brocasMCl != "" && brocasAUl!= ""&& sumaedit <= totalgranosl)

            {
  arrayevaluaciones[idEditar].totalgranos=totalgranosl;
   arrayevaluaciones[idEditar].brocasVA=brocasVAl;
    arrayevaluaciones[idEditar].brocasVB=brocasVBl;
     arrayevaluaciones[idEditar].brocasVC=brocasVCl;
      arrayevaluaciones[idEditar].brocasMA=brocasMAl;
       arrayevaluaciones[idEditar].brocasMB=brocasMBl;
        arrayevaluaciones[idEditar].brocasMC=brocasMCl;
         arrayevaluaciones[idEditar].brocasAU=brocasAUl;
         GuardarDB();
         var mensajeramaedit="La actualización de los datos de la rama se realizó con exito";
         mensajeBueno(mensajeramaedit);
          
}else{

var mensajemaloramaedit="Verifique datos:"+

"\n -Verifique que las casillas estén llenas con el respectivo número de granos por rama"+
"\n -Verifique que la suma de cada tipo de granos encontrados en la rama sea mayor al número total de granos contabilizados";
mensajeMalo(mensajemaloramaedit);


}
            
       });
    });





 function eliminarEvaluacion(){
        //Eliminar el usuario
      
            var idEliminarEva = $('#idEliminarEva').val();

          arrayevaluaciones.splice(idEliminarEva,1);
  GuardarDB();

  var ramaconfirmacion="Los datos de la rama se eliminaron con éxito";
       mensajeBueno(ramaconfirmacion);
   
      }  



      function guardarevaluacion(){


     arrayevaluaciones=JSON.parse(localStorage.getItem('datosrama'));

if(arrayevaluaciones=== null)
{

arrayevaluaciones=[];

}else{

arrayevaluaciones.forEach((element, index ) =>{



var nombre=element.nombreevaluador;
  
var lote=element.loteEva;
var finca=element.fincaEva;
var fecha=element.fechadeevaluacion;
var totalgranos=element.totalgranos;
var brocasVA=element.brocasVA;
var brocasVB=element.brocasVB;
var brocasVC=element.brocasVC;
var brocasMA=element.brocasMA;
var brocasMB=element.brocasMB;
var brocasMC=element.brocasMC;
var brocasAU=element.brocasAU;


var route="evaluaciones";
var token=$('#token').val();
$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{
  nombre:nombre,
  
  lote:lote,
  finca:finca,
  fechadeevaluacion:fecha,
   totalgranos:totalgranos,
    brocasvivasA:brocasVA,
    borcasvivasB:brocasVB,
     borcasvivasC:brocasVC,
   brocasmuertasA:brocasMA,
    brocasmuertasB: brocasMB,
    brocasmuertasC:brocasMC,
    brocasausentes:brocasAU,
   


},
});

});
guardarcalculo();
//alert("guardóevaluacion");


}
      

      }

      function guardarcalculo(){


 
var nombredelevaluador= $('#nombreevaluadorCal').val();
var loteEva=$('#loteCal').val();
var fincaEva=$('#fincaCal').val();
var fechadeevaluacion= $('#fechaCal').val();
var porcentajedeinfestacion= $('#porcentaje').val();
var porcentajedemortalidad=$('#porcentajeMO').val();
var porcentajedeausencia=$('#porcentajeAU').val();
console.log(nombredelevaluador+loteEva+fincaEva+fechadeevaluacion+porcentajedeinfestacion+porcentajedeinfestacion
  +porcentajedemortalidad+porcentajedeausencia);

if(nombredelevaluador != "" && loteEva !="" && fincaEva!="" &&  fechadeevaluacion !="" &&  fechadeevaluacion === o &&

porcentajedeinfestacion != "" &&   porcentajedemortalidad != "" && porcentajedeausencia != "NaN" && porcentajedeinfestacion != "NaN" &&   porcentajedemortalidad != "NaN" && porcentajedeausencia != "NaN")
{




var route="calculos";






var token=$('#token').val();






$.ajax({

url:route,
headers: {'X-CSRF-TOKEN': token},
type:'POST',
dataType:'json',
data:{

nombredelevaluador:nombredelevaluador,
  fincaEva: fincaEva,
  loteEva:loteEva,
    fechadeevaluacion:fechadeevaluacion,

    porcentajedeinfestacion:porcentajedeinfestacion,
    porcentajedemortalidad:porcentajedemortalidad,

porcentajedeausencia:porcentajedeausencia,

},
});

var contenido="Se guardó la evaluación correctamente";
mensajeBueno(contenido);
}else{



 contenido2="Verique los datos"+
 "\n - Verifique que las casillas no estén vacías y que correspondan a cada dato indicado"+
 "\n - Verifique que los porcentajes sean diferentes de palabra NaN";
 
mensajeMalo(contenido2);


}




      } 



     

function mensajeBueno(contenido){

   


swal({ title: 'Excelente!', text: contenido, icon: 'success', button: 'Entendido!'});




      }



      function mensajeMalo(contenido){

   


swal({ title: 'Error!', text: contenido, icon: 'warning', button: 'Entendido!'});




      }

  

 
var ctx4 = document.getElementById('myChart4').getContext('2d');
var ctx5 = document.getElementById('myChart5').getContext('2d');
var tablados=document.querySelector('#exampleConsulta');


function traerEvaluacioncalculo(){
var tableexampleConsulta= $('#exampleConsulta').DataTable();
var tableexamplePorcentajes=$('#examplePorcentajes').DataTable();
tableexampleConsulta.destroy();
tableexamplePorcentajes.destroy();

        var finca=$('#fincaEva').val();
        var nombre= $('#nombreConsulta').val();
        var lote=$('#loteConsulta').val();
        var fecha=$('#fechadeevaluacionConsulta').val();

        
        
if(finca!= "" && nombre != "" && lote != "" && fecha!= "")
{      




   tableexampleConsulta=  $('#exampleConsulta').DataTable(
        {
            "serverSide":true,
            "ajax":'api/evaluacionestraer/'+nombre+'/'+finca+'/'+fecha+'/'+lote,
            
            "columns":[

             

              { data:'id'},
              { data:'totalgranos'},
              { data:'brocasvivasA'},
              {data:'borcasvivasB'},
                {data:'borcasvivasC'},
                  {data:'brocasmuertasA'},
            {data:'brocasmuertasB'},
             {data:'brocasmuertasC'},
              {data:'brocasausentes'},
               



            
            ],


             
            "pageLength":100,
            language:{
                "search":"Buscar:",
                "paginate": {
        "first":      "Primero",
        
        "last":       "último",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },

    "emptyTable":     "El registro no se encuentra en la base de datos",

            },
dom: 'Bfrtip',
        buttons: [
           {
        extend:    'excelHtml5',
        text:      '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend:    'pdfHtml5',
        text:      '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend:    'copyHtml5',
        text:      '<i class="fas fa-copy"></i> ',
        titleAttr: 'Copiar información de la tabla',
        className: 'btn btn-dark'
      },
        ],

        });
     


     
             let p = document.getElementById('containerConsulta');
              let o = document.getElementById('containerConsultaDatos');
p.removeAttribute("hidden"); 

o.removeAttribute("hidden");
var idconsulta = $('#exampleConsulta tr').each(function() { var customerId = $(this).find("td:first").html(); });
console.log(idconsulta);







 
 


tableexamplePorcentajes=$('#examplePorcentajes').DataTable(
        {
            "serverSide":true,
            "ajax":'api/evaluacionescalculo/'+nombre+'/'+finca+'/'+fecha+'/'+lote,
            
            "columns":[

             

              { data:'porcentajedeinfestacion'},
              { data:'porcentajedemortalidad'},
              { data:'porcentajedeausencia'},
              



            
           ],
     
              "paging":false,

              "searching":false,

              "showing":false,
              "info": false,


               language:{
"emptyTable":     "El registro no se encuentra en la base de datos",
  },

              dom: 'Bfrtip',
        buttons: [
           {
        extend:    'excelHtml5',
        text:      '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend:    'pdfHtml5',
        text:      '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend:    'copyHtml5',
        text:      '<i class="fas fa-copy"></i> ',
        titleAttr: 'Copiar información de la tabla',
        className: 'btn btn-dark'
      },
        ],
        });
 
//otra función va hasta aquí
//$("#porcentajeConsul").val(PM);
//$("#porcentajeMOConsul").val(PM);
//$("#porcentajeAUConsul").val(PA);
         
      
       
var melo= DatosGraficas();



mensajeDos();
 
  $('#nombreConsulta').val("");
  $('#loteConsulta').val("");
  $('#fechadeevaluacionConsulta').val("");
    }else{


var maloconsultapas="Verifique los datos:"+
"\n - Verifique que las casillas estén llenas con los respectivos datos de la consulta ";
mensajeMalo(maloconsultapas);




    }

}

    function DatosGraficas(){




       var arregloGD=new Array();
   for(i=1;i<=9;i++)
{
    var totalGD=0;
 
  $('table#exampleConsulta tbody td:nth-child(' + i + ')').each(function (index) 
  {
    totalGD += parseFloat($(this).text());  

  
  });
  $('table#exampleConsulta tfoot th:nth-child(' + i + ')').text("Total: " + totalGD)  

  arregloGD[i]=totalGD;

}
/*

*/
var BroToTal=parseFloat(arregloGD[2]);
var BroVIA=parseFloat(arregloGD[3]);
var BroVIB=parseFloat(arregloGD[4]);
var BroVIC=parseFloat(arregloGD[5]);
var BroMUA=parseFloat(arregloGD[6]);
var BroMUB=parseFloat(arregloGD[7]);
var BroMUC=parseFloat(arregloGD[8]);
var BroMAU=parseFloat(arregloGD[9]);

$('#BroVIA').val(BroVIA);
$('#BroVIB').val(BroVIB);
$('#BroVIC').val(BroVIC);

$('#BroMUA').val(BroMUA);
$('#BroMUB').val(BroMUB);
$('#BroMUC').val(BroMUC);
$('#BroMAU').val(BroMAU);



pintarGrafica(BroVIA,BroVIB,BroVIC,BroMUA,BroMUB,BroMUC,BroMAU);

// gráfica




    }

function DatosGraficasPOR(){


 var arregloGDP=new Array();
   for(i=1;i<=3;i++)
{
    var totalGDP=0;
 
  $('table#examplePorcentajes tbody td:nth-child(' + i + ')').each(function (index) 
  {
    totalGDP += parseFloat($(this).text());  

  
  });
  $('table#examplePorcentajes tfoot th:nth-child(' + i + ')').text("Total: " + totalGDP)  

  arregloGDP[i]=totalGDP;

}
/*

*/
var pINF=parseFloat(arregloGDP[1]);
var pMOR=parseFloat(arregloGDP[2]);
var pAUS=parseFloat(arregloGDP[3]);
$('#PorcenIN').val(pINF);
$('#PorcenMOR').val(pMOR);
$('#PorcenAU').val(pAUS);
pintarGraficapor(pINF,pMOR,pAUS);

}


  function mensajeDos(){




swal({ title: 'Excelente!', text: 'Ahora podra ver los resultados de la evaluación que consultó si se encuentra registrada', icon: 'info', button: 'Entendido!'});




      }



     
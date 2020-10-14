var ctx = document.getElementById('myChart').getContext('2d');
var ctx2 = document.getElementById('myChart2').getContext('2d');
var ctx3 = document.getElementById('myChart3').getContext('2d');


function traergrafica(){
var infestacion= $("#porcentaje").val();
var mortalidad= $("#porcentajeMO").val();
var ausencia=$('#porcentajeAU').val();
var porcentajes= [infestacion,mortalidad, ausencia];
var valores=['Infestacion','Mortalidad','Ausentes'];

console.log("Areglos gráficas"+porcentajes);
console.log("Areglos gráficas"+mortalidad);
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: valores,
        datasets: [{
            label: valores,
            data: [infestacion,mortalidad,ausencia],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}

function traergraficacircular(){
var infestacion= $("#porcentaje").val();
var mortalidad= $("#porcentajeMO").val();
var ausencia=$('#porcentajeAU').val();
var porcentajes= [infestacion,mortalidad, ausencia];
var valores=['Infestacion','Mortalidad','Ausentes'];


console.log("Areglos gráficas"+porcentajes);
console.log("Areglos gráficas"+mortalidad);
var myChart2 = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: valores,
        datasets: [{
           label: valores,
            data: [infestacion,mortalidad,ausencia],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}


function traergraficaradar(){
var infestacion= $("#porcentaje").val();
var mortalidad= $("#porcentajeMO").val();
var ausencia=$('#porcentajeAU').val();
//var porcentajes= [infestacion,mortalidad,ausencia];
var valores=['Infestacion','Mortalidad','Ausentes'];



var myChart2 = new Chart(ctx3, {
    type: 'radar',
    data: {
        labels: valores,
        datasets: [{
            label: valores,
            data: [infestacion,mortalidad,ausencia],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options : {
    scale: {
        angleLines: {
            display: false
        },
        ticks: {
            suggestedMin: 50,
            suggestedMax: 100
        }
    }
}
});
}

 function pintarGrafica(BroVIA,BroVIB,BroVIC,BroMUA,BroMUB,BroMUC,BroMAU){
var valores=['Brocas Vivas A','Brocas Vivas B', 'Brocas Vivas C', 'Brocas Muertas A',
'Brocas Muertas B', 'Brocas Muertas C', 'Brocas Ausentes'];



var myChart4 = new Chart(ctx4, {
    type: 'radar',
    data: {
        labels: valores,
        datasets: [{
            label: valores,
            data: [BroVIA,BroVIB,BroVIC,BroMUA,BroMUB,BroMUC,BroMAU],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options : {
    scale: {
        angleLines: {
            display: false
        },
        ticks: {
            suggestedMin: 50,
            suggestedMax: 100
        }
    }
}
});
}




function pintarGraficapor(pINF,pMOR,pAUS){

var valores=['Infestacion','Mortalidad','Ausentes'];


var myChart5 = new Chart(ctx5, {
    type: 'pie',
    data: {
        labels: valores,
        datasets: [{
           label: valores,
            data: [pINF,pMOR,pAUS],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}

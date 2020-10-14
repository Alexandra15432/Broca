/*
    recuerda siempre mantener documentado el código
    con comentarios.
*/

/*
// asigna onclick a cebeceras de acordion
function AsignarOnClickACabeceras() {
    var displayContenidos = "none";
    var arrAcordeones = document.getElementsByClassName("cont-acordeon");

    for (var i = 0; i < arrAcordeones.length; i++) {

        var acordeon = arrAcordeones[i];
        var arrCabeceras = acordeon.getElementsByClassName("cabecera-acordeon");
        var arrContenidos = acordeon.getElementsByClassName("contenido-acordeon");

        arrCabeceras[0].setAttribute("onclick","AnimarContenido(this)");
        arrContenidos[0].style.display = displayContenidos;
    }
}


function AnimarContenido(objCabecera) {
    // objhetenemos al padre
    var padre = objCabecera.parentNode;

    var contenido = padre.getElementsByClassName("contenido-acordeon");

    if(contenido[0].style.display == "block") {
        contenido[0].style.display = "none";
    }
    else {
        contenido[0].style.display = "block";
    }
}

window.onload = function () {
    // llamamos a la funcion que asigna evento onclick a todas las cabeceras de acordeones
    AsignarOnClickACabeceras();
};
*/


// asigna onclick a cebeceras de acordion
function AsignarOnClickACabeceras() {
    var displayContenidos = "none";
    var arrAcordeones = document.getElementsByClassName("cont-acordeon");

    for (var i = 0; i < arrAcordeones.length; i++) {

        var acordeon = arrAcordeones[i];
        var arrCabeceras = acordeon.getElementsByClassName("cabecera-acordeon");
        var arrContenidos = acordeon.getElementsByClassName("contenido-acordeon");

        arrCabeceras[0].setAttribute("onclick","AnimarContenido(this)");
        arrContenidos[0].style.display = displayContenidos;
    }
}

// aumenta o disminuye la altura de un objeto
function AnimarContenido(objCabecera) {
    var pasos;                  // variable que determina cuantos px disminuimos del elemento con cada repeticion
    var duracion;               // duracion animacion en milisegundos. Un segundo equivale a 1000, medio segundo seria 500.
    var tiempoEspera;           // cada cunato se debe ejecutar la repeticion
    var idIntervalo;            // almacenamos el Id del intervalo    
    var nodoPadre;              // variable para obtener el nodo padre de la cabecera en la que se hizo clic
    var arrContenido;           // arreglo para guardar el contenido relacionado a la cabecera en la que se dio clic
    var contenido;              // variable para guardar el contenido.
    var alturaActual;           // variables de control de altura de elemento

    // iniciamos algunas variables
    pasos = 10;
    duracion = 500;
    nodoPadre = objCabecera.parentNode;
    arrContenido = nodoPadre.getElementsByClassName("contenido-acordeon");
    contenido = arrContenido[0];

    if(contenido.style.display == "block") {
        tiempoEspera = ( duracion / (contenido.offsetHeight / pasos) ); // formula matematica para obtener 

        idIntervalo = setInterval(DisminuirAlturaElemento, tiempoEspera);
    }
    else {
        contenido.style.height = "0px";
        contenido.style.display = "block";
        tiempoEspera = (duracion/(contenido.scrollHeight/pasos));

        idIntervalo = setInterval(AumentarAlturaElemento, tiempoEspera);
    }

    // disminuye la altura del contenido
    function DisminuirAlturaElemento() {
        alturaActual = contenido.offsetHeight;

        if((alturaActual - pasos) > 0) {
            contenido.style.height = (alturaActual - pasos) + "px"; // se debe asignar en px. Ejemplo 100px, no solo 100
        }
        else {
            contenido.style.display = "none";
            clearInterval(idIntervalo);
        }
    }

    // aumenta la altura del contenido
    function AumentarAlturaElemento() {
        alturaActual = contenido.offsetHeight;

        if((alturaActual + pasos) < contenido.scrollHeight) {
            contenido.style.height = (alturaActual + pasos) + "px";
        }
        else {
            contenido.style.height = contenido.scrollHeight + "px";
            clearInterval(idIntervalo);
        }
    }
}

window.onload = function () {
    // llamamos a la funcion que asigna evento onclick a todas las cabeceras de acordeones
    AsignarOnClickACabeceras();
};
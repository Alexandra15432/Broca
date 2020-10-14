let btnItems=document.querySelectorAll(".item-acordeon .btn-itm-acordeon");
for(let i=0; i<btnItems.length; i++){


btnItems[i].addEventListener("click",function(e){


let btn= e.target;
if(btn.className=="btn-itm-acordeon active"){

removerClase();

}else{
removerClase();
btn.classList.add("active");
}




});
}

function removerClase(){

for(let i=0; i<btnItems.length;i++){


	btnItems[i].classList.remove("active");
}

}

//botones boton brocas vivas B
function uno(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'1');

	


		
}
function dos(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'2');

}

function tres(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'3');

}
function cuatro(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'4');

	}

	function cinco(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'5');

	


		
}


function seis(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'6');

	


		
}

function siete(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'7');

	


		
}


function ocho(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'8');

	


		
}

function nueve(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'9');

	


		
}

function cero(){

	var brocasVB= document.getElementById("brocasVB").value;
	

$('#brocasVB').val( brocasVB+'0');

	


		
}
function borrar(){

	var brocasVB= document.getElementById("brocasVB").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVB').val( brocasVB);

	


		
}


//botones boton brocas vivas C
function unoC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'1');

	


		
}
function dosC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'2');

}

function tresC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'3');

}
function cuatroC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'4');

	}

	function cincoC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'5');

	


		
}


function seisC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'6');

	


		
}

function sieteC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'7');

	


		
}


function ochoC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'8');

	


		
}

function nueveC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'9');

	


		
}

function ceroC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

$('#brocasVC').val( brocasVB+'0');

	


		
}
function borrarC(){

	var brocasVB= document.getElementById("brocasVC").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVC').val( brocasVB);

	


		
}



//botones boton brocas muertas A
function unoMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'1');

	


		
}
function dosMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'2');

}

function tresMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'3');

}
function cuatroMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'4');

	}

	function cincoMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'5');

	


		
}


function seisMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'6');

	


		
}

function sieteMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'7');

	


		
}


function ochoMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'8');

	


		
}

function nueveMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'9');

	


		
}

function ceroMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

$('#brocasMA').val( brocasVB+'0');

	


		
}
function borrarMA(){

	var brocasVB= document.getElementById("brocasMA").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMA').val( brocasVB);

	


		
}



//botones boton brocas muertas B
function unoMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'1');

	


		
}
function dosMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'2');

}

function tresMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'3');

}
function cuatroMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'4');

	}

	function cincoMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'5');

	


		
}


function seisMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'6');

	


		
}

function sieteMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'7');

	


		
}


function ochoMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'8');

	


		
}

function nueveMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'9');

	


		
}

function ceroMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

$('#brocasMB').val( brocasVB+'0');

	


		
}
function borrarMB(){

	var brocasVB= document.getElementById("brocasMB").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMB').val( brocasVB);



}


//botones boton brocas muertas C
function unoMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'1');

	


		
}
function dosMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'2');

}

function tresMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'3');

}
function cuatroMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'4');

	}

	function cincoMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'5');

	


		
}


function seisMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'6');

	


		
}

function sieteMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'7');

	


		
}


function ochoMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'8');

	


		
}

function nueveMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'9');

	


		
}

function ceroMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

$('#brocasMC').val( brocasVB+'0');

	


		
}
function borrarMC(){

	var brocasVB= document.getElementById("brocasMC").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMC').val( brocasVB);

	


		
}


//botones boton brocas AUSENTES
function unoAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'1');

	


		
}
function dosAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'2');

}

function tresAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'3');

}
function cuatroAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'4');

	}

	function cincoAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'5');

	


		
}


function seisAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'6');

	


		
}

function sieteAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'7');

	


		
}


function ochoAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'8');

	


		
}

function nueveAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'9');

	


		
}

function ceroAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

$('#brocasAU').val( brocasVB+'0');

	


		
}
function borrarAU(){

	var brocasVB= document.getElementById("brocasAU").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasAU').val( brocasVB);

	


		
}




//botones boton brocas  TOTALGRANOS
function unoTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'1');

	


		
}
function dosTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'2');

}

function tresTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'3');

}
function cuatroTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'4');

	}

	function cincoTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'5');

	


		
}


function seisTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'6');

	


		
}

function sieteTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'7');

	


		
}


function ochoTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'8');

	


		
}

function nueveTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'9');

	


		
}

function ceroTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

$('#totalgranos').val( brocasVB+'0');

	


		
}
function borrarTG(){

	var brocasVB= document.getElementById("totalgranos").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#totalgranos').val( brocasVB);

	


		
}



// brocas vivas A


function unoVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'1');

	


		
}
function dosVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'2');

}

function tresVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'3');

}
function cuatroVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'4');

	}

	function cincoVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'5');

	


		
}


function seisVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'6');

	


		
}

function sieteVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'7');

	


		
}


function ochoVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'8');

	


		
}

function nueveVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'9');

	


		
}

function ceroVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'0');

	


		
}
function borrarVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVA').val( brocasVB);

	


		
}



// para editar evaluacion //////////////////////////////////////

//botones boton brocas vivas B
function unol(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'1');

	


		
}
function dosl(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'2');

}

function tresl(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'3');

}
function cuatrol(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'4');

	}

	function cincol(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'5');

	


		
}


function seisl(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'6');

	


		
}

function sietel(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'7');

	


		
}


function ochol(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'8');

	


		
}

function nuevel(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'9');

	


		
}

function cerol(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

$('#brocasVBl').val( brocasVB+'0');

	


		
}
function borrarl(){

	var brocasVB= document.getElementById("brocasVBl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVBl').val( brocasVB);

	


		
}


//botones boton brocas vivas C
function unoCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'1');

	


		
}
function dosCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'2');

}

function tresCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'3');

}
function cuatroCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'4');

	}

	function cincoCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'5');

	


		
}


function seisCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'6');

	


		
}

function sieteCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'7');

	


		
}


function ochoCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'8');

	


		
}

function nueveCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'9');

	


		
}

function ceroCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

$('#brocasVCl').val( brocasVB+'0');

	


		
}
function borrarCl(){

	var brocasVB= document.getElementById("brocasVCl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVCl').val( brocasVB);

	


		
}



//botones boton brocas muertas A
function unoMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'1');

	


		
}
function dosMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'2');

}

function tresMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'3');

}
function cuatroMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'4');

	}

	function cincoMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'5');

	


		
}


function seisMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'6');

	


		
}

function sieteMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'7');

	


		
}


function ochoMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'8');

	


		
}

function nueveMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'9');

	


		
}

function ceroMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

$('#brocasMAl').val( brocasVB+'0');

	


		
}
function borrarMAl(){

	var brocasVB= document.getElementById("brocasMAl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMAl').val( brocasVB);

	


		
}



//botones boton brocas muertas B
function unoMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'1');

	


		
}
function dosMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'2');

}

function tresMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'3');

}
function cuatroMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'4');

	}

	function cincoMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'5');

	


		
}


function seisMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'6');

	


		
}

function sieteMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'7');

	


		
}


function ochoMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'8');

	


		
}

function nueveMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'9');

	


		
}

function ceroMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

$('#brocasMBl').val( brocasVB+'0');

	


		
}
function borrarMBl(){

	var brocasVB= document.getElementById("brocasMBl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMBl').val( brocasVB);



}


//botones boton brocas muertas C
function unoMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'1');

	


		
}
function dosMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'2');

}

function tresMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'3');

}
function cuatroMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'4');

	}

	function cincoMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'5');

	


		
}


function seisMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'6');

	


		
}

function sieteMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'7');

	


		
}


function ochoMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'8');

	


		
}

function nueveMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'9');

	


		
}

function ceroMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

$('#brocasMCl').val( brocasVB+'0');

	


		
}
function borrarMCl(){

	var brocasVB= document.getElementById("brocasMCl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasMCl').val( brocasVB);

	


		
}


//botones boton brocas AUSENTES
function unoAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'1');

	


		
}
function dosAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'2');

}

function tresAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'3');

}
function cuatroAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'4');

	}

	function cincoAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'5');

	


		
}


function seisAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'6');

	


		
}

function sieteAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'7');

	


		
}


function ochoAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'8');

	


		
}

function nueveAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'9');

	


		
}

function ceroAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

$('#brocasAUl').val( brocasVB+'0');

	


		
}
function borrarAUl(){

	var brocasVB= document.getElementById("brocasAUl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasAUl').val( brocasVB);

	


		
}




//botones boton brocas  TOTALGRANOS
function unoTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'1');

	


		
}
function dosTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'2');

}

function tresTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'3');

}
function cuatroTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'4');

	}

	function cincoTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'5');

	


		
}


function seisTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'6');

	


		
}

function sieteTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'7');

	


		
}


function ochoTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'8');

	


		
}

function nueveTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'9');

	


		
}

function ceroTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

$('#totalgranosl').val( brocasVB+'0');

	


		
}
function borrarTGl(){

	var brocasVB= document.getElementById("totalgranosl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#totalgranosl').val( brocasVB);

	


		
}



// brocas vivas A


function unoVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'1');

	


		
}
function dosVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'2');

}

function tresVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'3');

}
function cuatroVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'4');

	}

	function cincoVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'5');

	


		
}


function seisVA(){

	var brocasVB= document.getElementById("brocasVA").value;
	

$('#brocasVA').val( brocasVB+'6');

	


		
}

function sieteVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'7');

	


		
}


function ochoVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'8');

	


		
}

function nueveVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'9');

	


		
}

function ceroVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

$('#brocasVAl').val( brocasVB+'0');

	


		
}
function borrarVAl(){

	var brocasVB= document.getElementById("brocasVAl").value;
	

brocasVB=brocasVB.substring(0,brocasVB.length-1);
$('#brocasVAl').val( brocasVB);

	


		
}






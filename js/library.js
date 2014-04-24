/*
Ing. Domingo Ilarreta
Libreria Javacript 2014
*/

function visibleHidden(ids){
    //alert('Lorem');
var ids;
var accion = document.getElementById(ids).style;
    if(!document.getElementById('sol1').checked){        
        accion.visibility="hidden";
        accion.position="absolute";
    }else{        
        accion.visibility="visible";
        accion.position="static";
        }
}

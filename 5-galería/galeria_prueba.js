'use strict'

const url = 'json/galeria.json';
const solicitud = new XMLHttpRequest();
solicitud.open('POST',url); // primer parametro metodo de peticion, segundo url donde se encuentra el json

solicitud.responseType = 'json';
solicitud.send();
console.log('lo que seax2');

solicitud.onload = ()=>{
    const Gal = solicitud.response;
    console.log(Gal[0].nombre);
    tablaGal(Gal);
    console.log(Gal);
}


function tablaGal(jsonObj){
    var tabla = document.querySelector("#gal");

    for (var index = 0; index < jsonObj.length; index++){

        var columna=document.createElement("div");
        columna.className="col-6 col-sm-4 mb-4";

        var tarjeta=document.createElement("a");
        tarjeta.className="thumbnail";
        tarjeta.href=document.createTextNode(jsonObj[index].imagen).textContent;

        var imagen = document.createElement("img");
        imagen.src=document.createTextNode(jsonObj[index].imagen).textContent;
        imagen.className="img-fluid";

        tarjeta.appendChild(imagen);
        columna.appendChild(tarjeta);
        tabla.appendChild(columna);
    }
}
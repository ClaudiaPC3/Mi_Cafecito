'use strict'

console.log('lo que sea');

const url = 'json/platillos.json';
const solicitud = new XMLHttpRequest();
solicitud.open('POST',url); // primer parametro metodo de peticion, segundo url donde se encuentra el json

solicitud.responseType = 'json';
solicitud.send();
console.log('lo que seax2');


solicitud.onload = ()=>{
    const Platillo = solicitud.response;
    console.log(Platillo[0].nombre);
    tablaPlatillo(Platillo);
    console.log(Platillo);
}


function tablaPlatillo(jsonObj){

    for (var index = 0; index < jsonObj.length; index++){
        /*SELECTOR DE SECCION*/
        switch(jsonObj[index].categoria){
            case "Caliente": 
                var tabla = document.querySelector("#caliente");
            break;

            case "Frío": 
                var tabla = document.querySelector("#frio");
            break;

            case "Repostería": 
                var tabla = document.querySelector("#reposteria");
            break;

            case "Bebida": 
                var tabla = document.querySelector("#bebida");
            break;                        

        }
        /*CARGA DE COMPONENTES*/
        var columna=document.createElement("div");
        columna.className="col mb-4";

        var tarjeta=document.createElement("div");
        tarjeta.className="card";

        var imagen = document.createElement("img");
        imagen.className="card-img-top";
        imagen.src=document.createTextNode(jsonObj[index].imagen).textContent;

        var datos = document.createElement("div");
        datos.className="card-body"

        var nombre=document.createElement("h5");
        nombre.className="card-title";
        var nombreText=document.createTextNode(jsonObj[index].nombre);
        nombre.appendChild(nombreText);

        var descripcion=document.createElement("p");
        descripcion.className="card-text";
        var descripcionText=document.createTextNode(jsonObj[index].descripcion);
        descripcion.appendChild(descripcionText);

        datos.appendChild(nombre);
        datos.appendChild(descripcion);

        var caracteristicas=document.createElement("ul");
        caracteristicas.className="list-group list-group-flush";

        var porcion=document.createElement("li");
        porcion.className="list-group-item d-flex flex-food";

        var porcionEtiquta=document.createElement("h6");
        var porcionEtiqutaText=document.createTextNode("Porcion: ");
        porcionEtiquta.appendChild(porcionEtiqutaText);

        if(jsonObj[index].categoria == "Repostería"){
            var porcionCantidad=document.createElement("p");
            var porcionCantidadText=document.createTextNode(jsonObj[index].tamanio+" gr");
            porcionCantidad.appendChild(porcionCantidadText);    
        }else{
            var porcionCantidad=document.createElement("p");
            var porcionCantidadText=document.createTextNode(jsonObj[index].tamanio+" ml");
            porcionCantidad.appendChild(porcionCantidadText);    
        }

        porcion.appendChild(porcionEtiquta);
        porcion.appendChild(porcionCantidad);

        var precio=document.createElement("li");
        precio.className="list-group-item d-flex flex-food";

        var precioEtiquta=document.createElement("h6");
        var precioEtiqutaText=document.createTextNode("Precio: ");
        precioEtiquta.appendChild(precioEtiqutaText);

        var precioCantidad=document.createElement("p");
        var precioCantidadText=document.createTextNode(jsonObj[index].precio+" pesos");
        precioCantidad.appendChild(precioCantidadText);

        precio.appendChild(precioEtiquta);
        precio.appendChild(precioCantidad);

        var iconos=document.createElement("li");
        iconos.className="list-group-item d-flex flex-food";

        var icono1=document.createElement("i");
        icono1.className="fab fa-hotjar fa-2x";
        var icono1Text=document.createTextNode("");
        icono1.appendChild(icono1Text);

        var icono2=document.createElement("i");
        icono2.className="far fa-snowflake fa-2x";
        var icono2Text=document.createTextNode("");
        icono2.appendChild(icono2Text);
        
        var icono3=document.createElement("i");
        icono3.className="far fa-smile fa-2x";
        var icono3Text=document.createTextNode("");
        icono3.appendChild(icono3Text);

        var icono4=document.createElement("i");
        icono4.className="far fa-thumbs-up fa-2x";
        var icono4Text=document.createTextNode("");
        icono4.appendChild(icono4Text);

        iconos.appendChild(icono1);
        iconos.appendChild(icono2);
        iconos.appendChild(icono3);
        iconos.appendChild(icono4);
        caracteristicas.appendChild(porcion);
        caracteristicas.appendChild(precio);
        caracteristicas.appendChild(iconos);
        tarjeta.appendChild(imagen);
        tarjeta.appendChild(datos);
        tarjeta.appendChild(caracteristicas);
        columna.appendChild(tarjeta);

        tabla.appendChild(columna);
    }
}
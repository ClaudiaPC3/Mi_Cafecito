var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.response);
    }
};

xmlhttp.open("GET", "./php/contacto-load.php", true);
xmlhttp.responseType = 'json';
xmlhttp.send();

xmlhttp.onload = ()=>{
    const response = JSON.parse(xmlhttp.response);
    if(response.username != "") {
        document.getElementById("disp-user-notlogged").style.visibility = 'hidden';
    } else {
        document.getElementById("form-comentario").style.visibility = 'hidden';
    }
    document.getElementById("select-plat").innerHTML = `${response.platillos.map((row) => selectTemplate(row)).join("")}`;
}

function selectTemplate(row) {
  return `
    <option value="${row.id}">${row.nombre}</option>
  `;
}
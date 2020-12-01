var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //console.log(this.response);
    }
};

xmlhttp.open("GET", "./php/administrador-load.php", true);
xmlhttp.responseType = 'json';
xmlhttp.send();

xmlhttp.onload = ()=>{
    const response = xmlhttp.response;
    //console.log(response);
    document.getElementById("select-plat").innerHTML = `${response.map((row) => selectTemplate(row)).join("")}`
    document.getElementById("delete-plat").innerHTML = `${response.map((row) => selectTemplate(row)).join("")}`
    console.log(json);
}

function selectTemplate(row) {
  return `
    <option value="${row.id}">${row.nombre}</option>
  `;
}

document.querySelector('.in-img-menu').addEventListener('change',function(e){
    var fileName = document.getElementById("img_menu").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
  })

  document.querySelector('.mod-img-menu').addEventListener('change',function(e){
    var fileName = document.getElementById("m-img_menu").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
  })

  document.querySelector('.in-img-gal').addEventListener('change',function(e){
    var fileName = document.getElementById("img_gal").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
  })
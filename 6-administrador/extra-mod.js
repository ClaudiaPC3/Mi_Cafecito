function fillTable(){
    $('#show-comment').load('./php/comentario-load.php');
  };

 
function openUs(){
  var xmlhttp2 = new XMLHttpRequest();
  xmlhttp2.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          //console.log(this.response2);
      }
  };
  
  xmlhttp2.open("GET", "./php/user-load.php", true);
  xmlhttp2.responseType = 'json';
  xmlhttp2.send();
  
  xmlhttp2.onload = ()=>{
      const response2 = xmlhttp2.response;
      //console.log(response2);
      document.getElementById("select-us").innerHTML = `${response2.map((row2) => selectTemplate(row2)).join("")}`;
  }
  
  function selectTemplate(row2) {
    var out = `
      <option value="${row2.username}">${row2.username} - `;  
      
      if( row2.admin == '1'){
    var res = `administrador </option>`;
      }else{
    var res = `usuario </option>`;
      }

    return out + res;  
  }

}


 

  var form = document.getElementById('us-form');

  console.log(form);

  function delUs(){
    form.action="./php/user-delete.php";
    form.submit();
  };

  function permUs(){
    form.action="./php/user-adminChange.php";
    form.submit();
  };

  
  function modUs(){
      $('#show-currentUs').load('./php/user-load-data.php');
    }

  function modOkUs(){
    form.action="./php/user-mod.php";
    form.submit();
  };
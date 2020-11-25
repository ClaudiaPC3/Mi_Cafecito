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
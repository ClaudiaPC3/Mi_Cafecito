<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MI CAFECITO</title>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Gabriela&family=Oleo+Script+Swash+Caps:wght@700&family=Paprika&family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/menu_prueba.css">
    <link rel="stylesheet" href="extra-administrador.scss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/fe6b3fe90e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>




</head>
<!-- Navigation -->
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead_ad">
    <div class="container h-100">

      <nav class="navbar navbar-expand-md bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
                <img class="logo" src="../img/logo.png">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse ligas" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../1-home/index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../2-conocenos/contacto.php">Conocenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../3-menu/menuF.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../4-miembros/membresia.php">Miembros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../5-galería/galeria.php">Galería</a>
              </li>          
            </ul>
          </div>
          <!-- de aqui -->
          <div class="dropdown dropi">
                    <a role="button" id="log-nav" class="btn-nav-log dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onfocus="myFunction(this.id)">
                            <?php 
                            if(isset($_SESSION["username"])){
                              echo $_SESSION["username"];
                            }else{
                              echo "Usuario";
                            }
                              
                            ?>
                    </a>
                    <?php 
                      if(isset($_SESSION["username"]) and $_SESSION["admin"] == "1"){
                        echo '
                        <div class="dropdown-menu dropdown-menu-right dropi2">
                        <a class="dropdown-item" role="button" href="../6-administrador/administrador.php">Opciones de administrador</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" role="button" href="../php/cerrarSesion.php">Cerrar Sesion</a>
                      </div>';
                      }else if(isset($_SESSION["username"])){
                        echo '
                        <div class="dropdown-menu dropdown-menu-right dropi2">
                        <a class="dropdown-item" role="button" href="../php/cerrarSesion.php">Cerrar Sesion</a>
                      </div>';

                      }else{
                        echo '
                        <div class="dropdown-menu dropdown-menu-right dropi2">
                          <a class="dropdown-item" role="button" href="../7-login/login.html">Ingresa</a>
                          <a class="dropdown-item" role="button" href="../8-registro/registro.html">Registrate</a>
                        </div>';
                      }
                    ?>
            </div>
            <!-- a aqui -->
        </div>
      </nav>

      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="font-weight-white">Hola Administrador...</h1>
          <p class="lead">Vamos a trabajar</p>
        </div>
      </div>
    </div>
  </header>
<body>
    <br>
    <div id="accordion">

        <div class="card p-3">
            <div class="card-header" id="h_add_coffe">
                <a role="button" class="collapsed" data-toggle="collapse" data-target="#add_coffe" aria-expanded="false" aria-controls="add_coffe">
                    <h4 style="color: #2A0859;">Agregar Bebida al Menu</h4><div class="divider"><span></span><span><i class="fas fa-utensils"></i></span><span></span></div>
                </a>
            </div>
            <div id="add_coffe" class="panel-collapse collapse" aria-labelledby="h_add_coffe" data-parent="#accordion">
                <div class="card-body">            
                    <form  action="./php/administrador-create.php" method="POST" name="agregar_menu" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"></input>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="categoria">Categoría</label>
                            <select id="categoria" name="categoria" class="form-control">
                                <option value="Caliente">Caliente</option>
                                <option value="Frío">Frío</option>
                                <option value="Repostería">Respostería</option>
                                <option value="Bebida">Bebidas</option>
                            </select>
                            </div>
                        </div>        
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="porcion">Porción</label>
                            <input type="number" class="form-control" id="porcion" name="porcion" placeholder="Cantidad en ml o gr"></input>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="Cantidad en pesos"></input>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" maxlength="40" placeholder="Que es lo que mas te gusto..."></textarea>
                        </div>
                        <div class="form-group">
                        <label for="img_menu">Imagen</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input in-img-menu" id="img_menu" name="img_menu">
                          <label class="custom-file-label" for="" data-browse="Buscar">Seleccionar archivo...</label>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-enviar w-100" onclick="alert('Platillo Agregado')">Agregar</button>
                    </form>
                </div>
            </div>    
        </div>

        <div class="card p-3">
          <div class="card-header" id="h_mod_coffe">
              <a role="button" onClick="openPlat()" class="collapsed" data-toggle="collapse" data-target="#mod_coffe" aria-expanded="false" aria-controls="mod_coffe">
                  <h4 style="color: #2A0859;">Modificar Bebida del Menu</h4><div class="divider"><span></span><span><i class="fas fa-exchange-alt"></i></span><span></span></div>
              </a>
          </div>
          <div id="mod_coffe" class="panel-collapse collapse" aria-labelledby="h_mod_coffe" data-parent="#accordion">
              <div class="card-body">    
                  <!-- <h6>Elige un platillo</h6>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="btn btn-enviar btn-outline-secondary" type="button">Elegir</button>
                    </div>
                    <select class="custom-select" id="select-plat" aria-label="Example select with button addon" name="m-platillo">
                      <option value="1">Café americano</option>
                      <option value="2">Café frapuchino</option>
                      <option value="3">Chocolate</option>
                      <option value="4">Malteada</option>
                      <option value="5">Café de olla</option>
                      <option value="6">Café expreso</option>
                      <option value="7">Cold brew</option>
                      <option value="8">Café capuchino</option>
                      <option value="9">Galletas de corazón</option>
                      <option value="10">Galletas de chispas de chocolate</option>
                      <option value="11">Pastel napolitano</option>
                      <option value="12">Té</option>
                      <option value="13">Pastel de chocolate</option>
                      <option value="14">Limonada</option>
                      <option value="15">Pay de queso</option>
                      <option value="16">Agua</option>
                      <option value="17">Jugo verde</option>
                      <option value="18">Jugo de naraja</option>
                    </select>
                  <br><br>
                  </div> -->                        
                  <form  action="./php/administrador.php" method="POST" name="mod_menu" enctype="multipart/form-data"> <!--quiza?-->
                      <h6>Elige un platillo</h6>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-enviar btn-outline-secondary" type="button">Elegir</button>
                        </div>
                        <select class="custom-select" id="select-plat" aria-label="Example select with button addon" name="m-platillo">
                          
                          <!--<option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>-->
                        </select>
                      <br><br>
                      </div>
                      <div class="divider"><span></span><span><i class="fas fa-folder-open"></i></span><span></span></div>                      
                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" id="m-nombre" name="m-nombre"></input>
                          </div>
                          <div class="form-group col-md-6">
                          <label for="categoria">Categoría</label>
                          <select id="m-categoria" name="m-categoria" class="form-control">
                              <option value="caliente">Caliente</option>
                              <option value="frio">Frío</option>
                              <option value="reposteria">Respostería</option>
                              <option value="bebida">Bebidas</option>
                          </select>
                          </div>
                      </div>        
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="porcion">Porción</label>
                          <input type="number" class="form-control" id="m-porcion" name="m-porcion" placeholder="Cantidad en ml o gr"></input>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="precio">Precio</label>
                          <input type="number" class="form-control" id="m-precio" name="m-precio" placeholder="Cantidad en pesos"></input>
                      </div>
                      </div>
                      <div class="form-row">
                      <label for="descripcion">Descripción</label>
                      <textarea type="text" class="form-control" id="m-descripcion" name="m-descripcion" maxlength="40" placeholder="Que es lo que mas te gusto..."></textarea>
                      </div>
                      <div class="form-row">
                        <label class="col-md-6">Seleccione una nueva imagen</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input mod-img-menu" id="m-img_menu" name="m-img">
                            <label class="custom-file-label" for="" data-browse="Buscar">Seleccionar archivo</label>
                          </div>
                      </div>
                      <br><br>
                          <button type="submit" class="btn btn-enviar w-100">Modificar</button>
                  </form>
                </div>
              </div>
          </div>    
      </div>



      <div class="card p-3">
        <div class="card-header" id="h_del_coffe">
            <a role="button" onClick="openPlat()" class="collapsed" data-toggle="collapse" data-target="#del_coffe" aria-expanded="false" aria-controls="del_coffe">
                <h4 style="color: #2A0859;">Eliminar Bebida del Menu</h4><div class="divider"><span></span><span><i class="fas fa-trash-alt"></i></span><span></span></div>
            </a>
        </div>
        <div id="del_coffe" class="panel-collapse collapse" aria-labelledby="h_del_coffe" data-parent="#accordion">
            <div class="card-body">                
                <form  action="./php/administrador-delete.php" method="POST" name="mod_menu" enctype="multipart/form-data"> <!--quiza?-->
                    <h6>Elige un platillo</h6>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button class="btn btn-enviar btn-outline-secondary" type="button">Elegir</button>
                      </div>
                      <select class="custom-select" id="delete-plat" aria-label="Example select with button addon" name="d-platillo">
                        
                        <!--<option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>-->
                      </select>
                    <br><br>
                    </div>
                    <button id="m-delete" class="btn btn-enviar w-100" style="background-color: #d2afff !important; color: #2A0859 !important">Eliminar</button>
                </form>
              </div>
            </div>
        </div>    
    </div>

        <!-- <div class="card p-3">
            <div class="card-header" id="h_add_img">
                <a role="button" class="collapsed" data-toggle="collapse" data-target="#add_img" aria-expanded="false" aria-controls="add_img">
                    <h4 style="color: #2A0859;">Agregar Imagen a la Galeria</h4><div class="divider"><span></span><span><i class="fas fa-camera"></i></span><span></span></div>
                </a>
            </div>
            <div id="add_img" class="panel-collapse collapse" aria-labelledby="h_add_img" data-parent="#accordion">
                <div class="card-body">           
                    <form  action="../5-galería/php/galeriaB.php" method="POST" name="agregar_galeria" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="img_gal">Imagen</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input in-img-gal" id="img_gal" name="img_gal">
                              <label class="custom-file-label" for="" data-browse="Buscar">Seleccionar archivo</label>
                            </div>
                        </div> 
                        <button type="submit" class="btn btn-enviar w-100" onclick="alert('Imagen Agregada')">Agregar</button>
                    </form>
                   
                </div>
            </div>    
        </div> -->
        <div class="card p-3">
        <div class="card-header" id="h_com">
            <a role="button" onClick="fillTable()" class="collapsed" data-toggle="collapse" data-target="#com" aria-expanded="false" aria-controls="com">
                <h4 style="color: #2A0859;">Comentarios</h4><div class="divider"><span></span><span><i class="fas fa-comments"></i></span><span></span></div>
            </a>
        </div>
        <div id="com" class="panel-collapse collapse" aria-labelledby="h_com" data-parent="#accordion">
            <div class="card-body">                
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <h6>Usuario</h6>
                    </div>
                    <div class="col-sm">
                      <h6>Asunto</h6>
                    </div>
                    <div class="col-sm">
                      <h6>Mensaje</h6>
                    </div>
                  </div>
                      <div id="show-comment"></div>
                </div>
              </div>
            </div>
        </div>    
    </div>

    <div class="card p-3">
        <div class="card-header" id="h_d-user">
            <a role="button" onClick="openUs()" class="collapsed" data-toggle="collapse" data-target="#d-user" aria-expanded="false" aria-controls="d-user">
                <h4 style="color: #2A0859;">Usuarios</h4><div class="divider"><span></span><span><i class="fas fa-users-cog"></i></span><span></span></div>
            </a>
        </div>
        <div id="d-user" class="panel-collapse collapse" aria-labelledby="h_d-user" data-parent="#accordion">
            <div class="card-body"> 

            <form  action="" method="POST" name="us-form" id="us-form" enctype="multipart/form-data"> <!--quiza?-->
                      <h6>Elige un usuario</h6>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-enviar btn-outline-secondary" type="button">Elegir</button>
                        </div>
                        <select class="custom-select" id="select-us" aria-label="Example select with button addon" name="select-us">

                        </select>
                      <br><br>
                      </div>
                      <div class="divider"><span></span><span><i class="fas fa-people-arrows"></i></span><span></span></div>         
                      <div class="row">
                        <div class="col-sm">
                          <h6>Cambiar Permisos</h6>
                        </div>
                        <div class="col-sm">
                          <button type="button" value="btn-perm" name="btn-perm" onClick="permUs()" class="btn btn-enviar w-100">Administrador - Usuario</button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm">
                          <h6>Modificar</h6>
                        </div>
                        <div class="col-sm">
                        
                          <button type="button" value="btn-modUs" name="btn-modUs" class="btn btn-enviar w-100" data-toggle="collapse" data-target="#modUsMenu" aria-expanded="false" aria-controls="modUsMenu"> Modificar</button>
                        </div>
                      </div>      
                      <!-- onClick="modUs()" -->
                      <div class="form-row collapse" id='modUsMenu'>
                      <div id="show-currentUs"></div>
                      <div class="form-group col-md-4">
                          <label for="porcion">Usuario</label>
                          <input type="text" class="form-control" id="us-name" name="us-name" placeholder="nombre de usuario"></input>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="precio">Correo</label>
                          <input type="text" class="form-control" id="us-em" name="us-em" placeholder="correo de usuario"></input>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="precio">Contraseña</label>
                          <input type="text" class="form-control" id="us-pass" name="us-pass" placeholder="contraseña"></input>
                      </div>    
                        <button type="button" value="btn-modOkUs" name="btn-modOkUs" onClick="modOkUs()" class="btn btn-enviar w-100">Modificar</button>                  
                      </div>
                      <br><br>
                      <div class="divider"><span></span><span><i class="fas fa-user-slash"></i></span><span></span></div>        
                      <div class="row">
                        <div class="col-sm">
                          <h6>Eliminar usuario</h6>
                        </div>
                        <div class="col-sm">
                          <button type="button" value="btn-dele" name="btn-dele" onClick="delUs()" class="btn btn-enviar w-100" style="background-color: #d2afff !important; color: #2A0859 !important">
                          Eliminar</button>
                        </div>
                      </div>
                          
                  </form>
              </div>
            </div>
        </div>    





    <section>
      <script>
        if($(window).scrollTop() > 40){
            $('nav').removeClass('notScrolled');
            $('nav').toggleClass('scrolled');
        }else{
            $('nav').removeClass('scrolled');
            $('nav').toggleClass('notScrolled');
        }            
    </script> 
           <script src="../js/prueba.js"></script>
           <script src="extra-administrador.js"></script>
           <script src="extra-mod.js"></script>
    </section>
</body>

<footer class="card-group">
  <div class="card">
    <div class="card-body card-body-f">
      <h5 class="card-title">MAPA DEL SITIO</h5>
      <p class="card-text">
          <div class="text-center center-block sitio">
                  <a href="../1-home/index.php"><p>HOME</p></a>
                  <a href="../3-menu/menuF.php"><p>MENU</p></a>
                  <a href="../5-galería/galeria.php"><p>GALERIA</p></a>
                  <a href="../4-miembros/membresia.php"><p>MEMBRESIAS</p></a>
                  <a href="../2-conocenos/contacto.php"><p>CONTACTO</p></a>
              </div>    
      </p>
    </div>
    <div class="card-footer">
      <a><small class="text-muted">Pagina bajo construccion</small></a>
    </div>
  </div>
  <div class="card">
    <div class="card-body card-body-f">
      <h5 class="card-title"><center>CONEXIONES</center></h5>
      <div class="text-center center-block">
          <br />
              <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:a19310150@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
          </div>
    </div>
    <div class="card-footer">
      <a><small class="text-muted">Gracias por visitarnos</small></a>
    </div>
  </div>
  <div class="card">
    <div class="card-body card-body-f">
      <h5 class="card-title">VISITANOS</h5>
      <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7464.163768426525!2d-103.39655184087304!3d20.706899241472545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae4e8d5453d%3A0xc4fdd3929a2ecbd1!2sCentro%20de%20Ense%C3%B1anza%20T%C3%A9cnica%20Industrial%20Plantel%20Colomos!5e0!3m2!1sen!2smx!4v1604455867636!5m2!1sen!2smx" width="33" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="card-footer">
    <a><small class="text-muted">Cierre del Tercer Parcial</small></a>
    </div>
  </div>
</footer>

</html>
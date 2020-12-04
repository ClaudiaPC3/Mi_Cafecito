<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MI CAFECITO</title>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Gabriela&family=Oleo+Script+Swash+Caps:wght@700&family=Paprika&family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Cherry+Swash:wght@700&family=Playfair+Display&family=Roboto+Slab&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="../css/menu_prueba.css">

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
  <header class="masthead_con">
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
          <h1 class="font-weight-white">Nosotros</h1>
          <p class="lead">Estamos para servir...</p>
        </div>
      </div>
    </div>
  </header>
<body>

  <section id="mis">
        <div class="d-flex align-items-center justify-content-center">
        <a class="btn cardi-img" data-toggle="collapse" href="#Mision" role="button" aria-expanded="false" aria-controls="Mision">
            <div class="card bg-dark align-self-center text-white">
                <img class="card-img cardi-img" src="../img/mis.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h3 class="card-title">Mision</h3>
                </div>
              </div>
        </a>

        <div class="collapse" id="Mision">
            <div class="d-flex flex-column justify-content-between align-items-center mini-cardi">
            <div class="card">
                <div class="card-header">
                  <h4>Frase...</h4>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</p>
                    <footer class="blockquote-footer" style="   font-family: 'Uncial Antiqua', cursive;">Robert D. en <cite title="Source Title">Coffe Box</cite></footer>
                  </blockquote>
                </div>
              </div>
              <div class="divider"><span></span><span><i class="fas fa-hand-holding-heart"></i></i></span><span></span></div>
            <div class="card text-center w-100">
                <div class="card-body">
                  <h4 class="card-title">Calentar al mundo...</h4>
                  <p class="card-text">Inspirar momentos de optimismo y felicidad. Crear valor y hacer la diferencia.</p>
                </div>
                <div class="card-footer text-muted" style="height: 4vh;">
                  <p>Desde 2018...</p>
                </div>
              </div>

          </div>
        </div>
        </div>
    </section>
    <br>
    <section id="vis">
      <div class="d-flex flex-row-reverse align-items-center justify-content-center">
          <a class="btn cardi-img" data-toggle="collapse" href="#Vision" role="button" aria-expanded="false" aria-controls="Vision">
              <div class="card bg-dark align-self-center text-white">
                  <img class="card-img cardi-img" src="../img/vis.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h3 class="card-title">Vision</h3>
                  </div>
                </div>
          </a>
      
          <div class="collapse" id="Vision">
              <div class="d-flex flex-column justify-content-between align-items-stretch mini-cardi">
              <div class="card">
                  <div class="card-header">
                    <h4>Frase...</h4>
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>De hecho, esta parece ser una necesidad básica del corazón humano en toda crisis importante: una buena taza de café caliente. </p>
                      <footer class="blockquote-footer" style="   font-family: 'Uncial Antiqua', cursive;">Rey Alejandro en <cite title="Source Title">una conquista</cite></footer>
                    </blockquote>
                  </div>
                </div>
                <div class="divider"><span></span><span><i class="far fa-eye"></i></span><span></span></div>
              <div class="card text-center">
                  <div class="card-body">
                    <h4 class="card-title">Servir mejor a nuestros clientes...</h4>
                    <p class="card-text">para ser siempre relevantes en sus vidas y formar relaciones duraderas.</p>
                  </div>
                  <div class="card-footer text-muted" style="height: 4vh;">
                    <p>Desde 2018...</p>
                  </div>
                </div>
      
            </div>
          </div>
          </div>
      </section>
        <br>
      <section id="desci">
        <div class="d-flex align-items-center justify-content-center">
            <a class="btn cardi-img" data-toggle="collapse" href="#Descripcion" role="button" aria-expanded="false" aria-controls="Descripcion">
                <div class="card bg-dark align-self-center text-white">
                    <img class="card-img cardi-img" src="../img/email.jpg" alt="Card image">
                    <div class="card-img-overlay">
                      <h3 class="card-title">Descripcion</h3>
                    </div>
                  </div>
            </a>
        
            <div class="collapse" id="Descripcion">
                <div class="d-flex flex-column justify-content-between align-items-stretch mini-cardi">
                <div class="card">
                    <div class="card-header">
                      <h4>Frase...</h4>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>La inspiración existe, pero tiene que encontrarte trabajando.</p>
                        <footer class="blockquote-footer" style="   font-family: 'Uncial Antiqua', cursive;">Pablo Picasso en <cite title="Source Title">Guernica</cite></footer>
                      </blockquote>
                    </div>
                  </div>
                  <div class="divider"><span></span><span><i class="fas fa-user-edit"></i></span><span></span></div>
                <div class="card text-center">
                    <div class="card-body">
                      <h4 class="card-title">Aprendizaje, éxito, calidad e inclusión.</h4>
                      <p class="card-text">Una cafetería es un establecimiento donde se sirve café. Por lo general estos recintos también ofrecen otras infusiones y bebidas, e incluso ciertos tipos de comida. </p>
                    </div>
                    <div class="card-footer text-muted" style="height: 4vh;">
                      <p>Desde 2018...</p>
                    </div>
                  </div>
        
              </div>
            </div>
            </div>
      </section>
        <br>
        <!--SECTION-->
        <section id="mail">
          <!--USO DE FLEX POR BOOSTRAP-->
        <div class="d-flex flex-row-reverse align-items-center justify-content-center">
            <a class="btn cardi-img2 w-50 h-30" data-toggle="collapse" href="#Contactanos" role="button" aria-expanded="false" aria-controls="Contactanos">
                <div class="card bg-dark align-self-center text-white">
                    <img class="card-img cardi-img2" src="../img/des.jpg" alt="Card image">
                    <div class="card-img-overlay">
                      <h3 class="card-title">Contactanos...</h3>
                    </div>
                  </div>
            </a>
        
            <div class="collapse w-50 h-30 ml-5 mr-3" id="Contactanos">
                <div class="divider"><span></span><span><i class="far fa-envelope"></i></span><span></span></div>
                <div class="card-header"><h4>Queremos escucharte!</h4></div>  
                <div class="card border-white">
                
                <div class="card-body" id="comentario-body">  
                  <!--USUARIO INVITADO-->
                  <div id="disp-user-notlogged" class="disp-user-notlogged d-block">
                    <h5 style="font-family: 'Croissant One', cursive;">Hola usuario! Estas ingresando como invitado.</h5>
                    <h5 style="font-family: 'Croissant One', cursive; font-size: 18px;">Para comunicarnos contigo, es necesario 
                    <a href="../7-login/login.html" class="loginLink-dec">iniciar sesion</a></h5>
                  </div>
                    <form  action="./php/buzon.php" method="POST" name="agregar_menu" enctype="multipart/form-data" id="form-comentario">   
                      <!--USUARIO ACTIVO-->     
                      <div class="form-group row d-none" id="disp-user-logged">
                        <label for="username" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="input-group col">
                          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-enviar" style="background-color: #d2afff !important; color: #2A0859 !important" type="button" id="button-addon2">¿No eres tu?</button>
                          </div>
                        </div>
                      </div>                
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="asunto">Asunto</label>
                            <select id="asunto" name="asunto" class="form-control">
                                <option type="button" value="sugerencia" id="sug" onclick="hidePlat()">Sugerencia</option>
                                <option type="button" value="queja" id="quej"  onclick="hidePlat()">Queja</option>                                
                                <option type="button" value="platillo" id="plati" onclick="$('#show-plat-in').toggleClass('visible');$('#show-plat-in').removeClass('invisible');">Platillo</option>
                                <option selected type="button" value="otro" id="otro" onclick="hidePlat()">Otro..</option>
                            </select>
                            </div>
                            <!--SELECT PLATILLO-->
                            <div class="form-group col-md-6 invisible" id="show-plat-in">
                              <label for="asunto">Platillo</label>
                              <select class="custom-select" id="select-plat" aria-label="Example select with button addon" name="m-platillo">
                                
                                <!--<option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>-->
                                </select>
                            </div>   
                        </div>                     
                        <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea type="text" class="form-control" id="mensaje" name="mensaje" maxlength="40" placeholder="tu mensaje aqui"></textarea>
                        </div>
                        <button type="submit" class="btn btn-enviar w-100">Enviar</button>
                    </form>
                </div>
                  </div>
              </div>
            </div>
          </section>
            <br>
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

      <script>
        function hidePlat(){
          if(document.getElementById('show-plat-in').classList.contains('visible')){
          $('#show-plat-in').toggleClass('invisible');
          $('#show-plat-in').removeClass('visible');
          }
        }
      </script>

      <script src="../js/prueba.js"></script>
      <script src="./contacto.js"></script>
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
<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MI CAFECITO</title>
    <!--USO DE GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Gabriela&family=Oleo+Script+Swash+Caps:wght@700&family=Paprika&family=Uncial+Antiqua&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fe6b3fe90e.js" crossorigin="anonymous"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>    
</head>
<!--HEADER-->
  <header class="masthead">
    <div class="container h-100">

      <!--rutas actualizadas-->
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
          </nav>
        <!--rutas actualizadas-->

      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="font-weight-white">Mi Cafecito</h1>
          <p class="lead">Como el de tu casa, pero mejor</p>
        </div>
      </div>
    </div>
  </header>

<body>
    <br>
    <br>
    <!--SECTION-->
  <section>
    <!--DIV-->
    <div class="carr">
      <div class="row">
        <div class="col-sm-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/somo.jpg" class="d-block w-100 img_carr" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="tit-sider"><a href="../2-conocenos/contacto.php"><h5>SOBRE NOSOTROS</h5></a></div>
                  <div class="mis">
                      <p>Somos una pequeña cafetería comprometida por brindarte servicios de calidad a precios competitivos</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="../img/menu.jpg" class="d-block w-100 img_carr" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="tit-sider"><a href="../3-menu/menuF.php"><h5>MENU</h5></a></div>
                    <div class="mis">
                      <p>Conoce nuestra variedad de productos</p>
                      <p>Desde luego nuestro fuerte son las bebidas, pero tambien contamos una deliciosa reposteria francesa</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../img/membresia.jpg" class="d-block w-100 img_carr" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="tit-sider"><a href="../4-miembros/membresia.php"><h5>MIEMBROS</h5></a></div>
                    <div class="mis">
                      <p>Conoce nuestras ofertas exclusivas para miembros</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../img/galeria.jpg" class="d-block w-100 img_carr" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="tit-sider"><a href="../5-galería/galeria.php"><h5>GALERIA</h5></a></div>
                    <div class="mis">
                      <p>¡Descubre todos lo que tenemos para ofrecer!</p>
                      <p>Desde nuestras instalaciones, hasta nuestros platillos favoritos</p>
                    </div>
                  </div>
                </div>          
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <br><h4>Nosotros</h4><div class="divider"><span></span><span><i class="fas fa-user-circle"></i></span><span></span></div>
    <div class="card text-center m-5">
              <div class="card">
                  <img class="card-img1" src="../img/porsomos.jpg" alt="Card image">
              </div>
      <div class="card-body">
        <h5 class="card-title">Conocenos, estamos para servir...</h5>
        <p class="card-text">Encuentra aspectos relacionados con nuestra filosofía como empresa, por ejemplo lo que buscamos y como nos vemos a nosotros mismos</p>
        <h5>MISION: </h5>
        <p class="card-text">Inspirar momentos de optimismo y felicidad. Crear valor y hacer la diferencia</p>
        <h5>VISION: </h5>
        <p class="card-text">Servir mejor a nuestros clientes para ser siempre relevantes en sus vidas y formar relaciones duraderas. </p>
        <p>¡Conoce más!</p>
      </div>
      <div class="card-footer flex-food">
        <a href="../2-conocenos/contacto.php#mis" data-toggle="tooltip" data-placement="bottom" title="Hooray!"><i class="fas fa-key fa-2x"></i></a>
        <a href="../2-conocenos/contacto.php#vis"><i class="far fa-lightbulb fa-2x"></i></a>
        <a href="../2-conocenos/contacto.php#desci"><i class="fas fa-users fa-2x"></i></a>
        <a href="../2-conocenos/contacto.php#mail"><i class="fas fa-envelope fa-2x"></i></a>
      </div>
    </div>
  </section>

  <section>
    <br><h4>Menu</h4><div class="divider"><span></span><span><i class="fas fa-mug-hot"></i></span><span></span></div>
    <div class="card text-center m-5">
      <div class="card">
        <img class="card-img1" src="../img/pormen.jpg" alt="Card image">
      </div>
      <div class="card-body">
        <h5 class="card-title">Descubre nuestras bebidas y especialidades...</h5>
        <p class="card-text">Encuentra todo lo que tenemos que ofrecer. Desde luego al ser una cafeteria nos especializamos en café, sin embargo no descuidamos los esenciales para cualquier reunión o acompañamientos para nuestro delicioso café</p>
        <p>¡Conoce más!</p>
      </div>
      <div class="card-footer flex-food">
        <a href="../3-menu/menuF.php#calientes"><i class="fab fa-hotjar fa-2x"></i></a>
        <a href="../3-menu/menuF.php#frios"><i class="far fa-snowflake fa-2x"></i></a>
        <a href="../3-menu/menuF.php#reposterias"><i class="fas fa-birthday-cake fa-2x"></i></a>
        <a href="../3-menu/menuF.php#bebidas"><i class="fas fa-glass-whiskey fa-2x"></i></a>
      </div>
    </div>
  </section>

  <section>
    <br><h4>Miembros</h4><div class="divider"><span></span><span><i class="fas fa-user-shield"></i></span><span></span></div>
    <div class="card text-center m-5">
      <div class="card">
        <img class="card-img1" src="../img/pormem.jpg" alt="Card image">
      </div>
      <div class="card-body">
        <h5 class="card-title">Únete a la familia ...</h5>
        <p class="card-text">Encuentra promociones exclusivas para los miembros. Desde descuentos, participación en sorteos y más. Si no eres miembro, registrate y si lo eres inicia sesión</p>
        <p>¡Conoce más!</p>
      </div>
      <div class="card-footer flex-food">
        <a href="../4-miembros/membresia.php"><i class="far fa-laugh-beam fa-2x"></i></a>
        <a href="../4-miembros/membresia.php"><i class="far fa-grin-stars fa-2x"></i></a>
        <a href="../4-miembros/membresia.php"><i class="far fa-smile-wink fa-2x"></i></a>
        <a href="../4-miembros/membresia.php"><i class="far fa-grin-tongue-wink fa-2x"></i></a>
      </div>
    </div>
  </section>

  <section>
    <br><h4>Galería</h4><div class="divider"><span></span><span><i class="fas fa-image"></i></span><span></span></div>
    <div class="card text-center m-5">
      <div class="card">
        <img class="card-img1" src="../img/porgal.jpg" alt="Card image">
      </div>
      <div class="card-body">
        <h5 class="card-title">Descúbrenos a distancia ...</h5>
        <p class="card-text">Encuentra fotos de nuestras instalaciones, nuestros productos y nuesta comunidad, o mejor aún participa en su creación. Envia un mensaje para mayor información</p>
        <p>¡Conoce más!</p>
      </div>
      <div class="card-footer flex-food">
        <a href="../5-galería/galeria.php"><i class="fas fa-camera-retro fa-2x"></i></a>
        <a href="../5-galería/galeria.php"><i class="far fa-images fa-2x"></i></a>
        <a href="../5-galería/galeria.php"><i class="fas fa-file-image fa-2x"></i></a>
        <a href="../5-galería/galeria.php"><i class="fas fa-portrait fa-2x"></i></a>
      </div>
    </div>
  </section>

    <section>
        <script>
            if($(window).scrollTop() > 80){
                $('nav').removeClass('notScrolled');
                $('nav').toggleClass('scrolled');
            }else{
                $('nav').removeClass('scrolled');
                $('nav').toggleClass('notScrolled');
            }            
      </script>
      <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
      <script src="../js/index.js"></script>
    </section>
</body>

<!--FOOTER con rutas actualizadas-->
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
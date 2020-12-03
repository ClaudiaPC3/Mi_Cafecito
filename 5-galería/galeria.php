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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/fe6b3fe90e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css" integrity="sha512-NVt7pmp5f+3eWRPO1h4A1gCf4opn4r5z2wS1mi7AaVcTzE9wDJ6RzMqSygjDzYHLp+mAJ2/qzXXDHar6IQwddQ==" crossorigin="anonymous"/>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

</head>

  <header class="masthead_gal">
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
          <h1 class="font-weight-white" style="color: black;">Mi Galería</h1>
          <p class="lead"  style="color: black;">Por ti y para ti</p>
        </div>
      </div>
    </div>
  </header>
<body>

<div class="container gallery-container">
    
    <div class="tz-gallery">
        <div class="row" id="gal">

        </div>

    </div>

</div>

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
       
       <script src="galeria.js"></script>
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
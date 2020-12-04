<?php
    include("../../php/conexion.php");
    
    $id = $_POST["select-us"];
    

    $sql = "SELECT * FROM usuario WHERE username = $id";
    $result = mysqli_query($conexion, $sql);

    if ($result) {

        if($result==TRUE){
            while($info=mysqli_fetch_array($result)){
                echo '
                    <div class="form-group col-md-4">
                        <label>Usuario</label>
                        '.$info['username'].'
                    </div>
                    <div class="form-group col-md-4">
                        <label>Correo</label>
                        '.$info['correo'].'
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contraseña</label>
                        '.$info['contraseña'].'
                    </div>';                  
            }
        }
    }

    $conexion->close();
?>

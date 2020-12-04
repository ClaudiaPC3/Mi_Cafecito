<?php
    include("../../php/conexion.php");

    $sql = "SELECT * FROM vercomentario";
    $query = mysqli_query($conexion, $sql);

    $myArray = array();
    if ($query) {

        if($query==TRUE){
            while($info=mysqli_fetch_array($query)){
                echo '<div class="row">
                        <div class="col-sm text-center">
                            '.$info['usernameC'].'
                        </div>
                        <div class="col-sm text-center">
                            '.$info['asunto'];
                        if($info['asunto'] == "platillo"){
                            echo ' ('.$info['nombre'].')';
                        }
                        echo '</div>
                              <div class="col-sm text-center">'.$info['mensaje'].'                     
                        </div>
                    </div>';
            }
        }
    }

    $conexion->close();
?>

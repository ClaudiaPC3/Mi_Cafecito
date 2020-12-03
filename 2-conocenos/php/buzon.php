<?php
    include("../../php/conexion.php");

    session_start();

    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $platillo = 'null';

        if($asunto == "platillo") {
            $platillo = $_POST['m-platillo'];
            echo "platillo";
        }

        $sql = "INSERT INTO comentario (usernameC, platilloC, asunto, mensaje)
                    VALUES ('$username', $platillo, '$asunto', '$mensaje');";

        if($conexion->query($sql)) {
            echo ('
                    <body style="background: #2A0859">
                        
                    </body>
                    <script LANGUAGE="JavaScript">
                        window.alert("Comentario publicado de manera exitosa.");
                        window.location.href="../contacto.php";
                    </script>
                ');
        } else {
            echo $sql . " error " . $conexion->error;
        }
    }

?>

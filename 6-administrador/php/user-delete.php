<?php
    include("../../php/conexion.php");

    $pk = $_POST['select-us'];
    
    $sql = "DELETE FROM usuario WHERE username = '$pk'";
    $result = $conexion->query($sql);    

    if($conexion->query($sql)) {
        echo ('
                <body style="background: #2A0859">
                    
                </body>
                <script LANGUAGE="JavaScript">
                    window.alert("Usuario eliminado de manera exitosa.");
                    window.location.href="../administrador.php";
                </script>
            ');
    } else {
        echo $sql . " error " . $conexion->error;
    }

    echo $producto;

    $conexion->close();    

?>

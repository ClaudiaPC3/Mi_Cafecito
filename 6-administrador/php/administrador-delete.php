<?php
    include("../../php/conexion.php");

    $producto = $_POST['d-platillo'];
    
    $sql = "DELETE FROM platillo WHERE id = $producto";
    $result = $conexion->query($sql);    

    if($conexion->query($sql)) {
        echo ('
                <body style="background: #2A0859">
                    
                </body>
                <script LANGUAGE="JavaScript">
                    window.alert("Producto eliminado de manera exitosa.");
                    window.location.href="../administrador.php";
                </script>
            ');
    } else {
        echo $sql . " error " . $conexion->error;
    }

    echo $producto;

    $conexion->close();    

?>

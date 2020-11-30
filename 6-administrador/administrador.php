<?php
    include("../php/conexion.php");

    $producto = $_POST['m-platillo'];
    $nombre = $_POST['m-nombre'];
    $porcion = $_POST['m-porcion'];
    $precio = $_POST['m-precio'];
    $categoria = $_POST['m-categoria'];
    $descripcion = $_POST['m-descripcion'];
    //$imagen = $_POST['m-img_menu'];
    
    $sql = "SELECT * FROM platillo WHERE id = $producto";
    $result = $conexion->query($sql);

    if($result) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $currentData = $row;
        }
    }


    if($nombre != '')
        $currentData['nombre'] = $nombre;
    if($porcion != '')
        $currentData['porcion'] = $porcion;
    if($precio != '')
        $currentData['precio'] = $precio;
    if($categoria != '')
        $currentData['categoria'] = $categoria;
    if($descripcion != '')
        $currentData['descripcion'] = $descripcion;

    $sql = "UPDATE platillo 
                SET nombre = '$currentData[nombre]', 
                    porcion = $currentData[porcion],
                    precio = $currentData[precio],
                    categoria = '$currentData[categoria]',
                    descripcion = '$currentData[descripcion]'
                WHERE id = $currentData[id];";

    if($conexion->query($sql)) {
        echo "  <script>
                    alert('kkk');
                </script>";
    } else {
        echo $sql . " error " . $conexion->error;
    }

    $conexion->close();    

?>
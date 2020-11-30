<?php
    include("../php/conexion.php");

    $sql = "SELECT id, nombre FROM platillo";
    $result = mysqli_query($conexion, $sql);

    $myArray = array();
    if ($result) {

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
        }
        echo json_encode($myArray);
    }

    $conexion->close();
?>

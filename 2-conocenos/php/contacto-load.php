<?php
    include("../../php/conexion.php");
    session_start();

    $username = null;

    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }

    $sql = "SELECT id, nombre FROM platillo";
    $result = mysqli_query($conexion, $sql);

    $myArray = array();
    if ($result) {

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
        }
        $platillos = json_encode($myArray);
        echo json_encode('{"platillos": ' . $platillos . ', "username": "' . $username . '"}');
    }

    $conexion->close();
?>

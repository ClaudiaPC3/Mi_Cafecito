<?php
    include("../php/conexion.php");


    $username = $_POST ['username'];
    $correo = $_POST ['correo'];
    $contrasenia = $_POST ['password'];
    $admin = 0;


    $sqlRegistro = "INSERT INTO usuario VALUES ('$username','$correo','$contrasenia',$admin)";

    if (mysqli_query($conexion, $sqlRegistro)) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error: " . $sqlRegistro . "<br>" . mysqli_error($conexion);
    }

mysqli_close($conexion);
header('location: ../7-login/login.html');
?>
<?php
    $servidor = "127.0.0.1";
	$usuario  = "root";
	$psw	  = "";
	$bdd	  = "micafecito";

    $conexion = mysqli_connect($servidor, $usuario, $psw, $bdd);

    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo"<h5>Si jala la conexion</h5>";


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

?>
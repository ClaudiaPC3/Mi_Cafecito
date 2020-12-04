<?php
    include("../../php/conexion.php");
    
    $id = $_POST["select-us"];
    $user = $_POST["us-name"];
    $email = $_POST["us-em"];
    $pass = $_POST["us-pass"];
    
    
    $sqlA = "SELECT * FROM usuario WHERE username = '$id'";
    $resultA = mysqli_query($conexion, $sqlA);

    if($resultA==TRUE)
    {
        $info=mysqli_fetch_array($resultA);
        {
            if($user == ''){$user = $info['username'];}
            if($email == ''){$email = $info['correo'];}
            if($pass == ''){$pass = $info['contraseña'];}
        }
    }

    $sql = "UPDATE usuario 
                SET username = '$user', 
                    correo = '$email',
                    contraseña = '$pass'
                WHERE username = '$id'";
    $result = mysqli_query($conexion, $sql);

    if($conexion->query($sql)) {
        echo ('
                <body style="background: #2A0859">
                    
                </body>
                <script LANGUAGE="JavaScript">
                    window.alert("Usuario modificado de manera exitosa.");
                    window.location.href="../administrador.php";
                </script>
            ');
    } else {
        echo ('
                <body style="background: #2A0859">
                    
                </body>
                <script LANGUAGE="JavaScript">
                    window.alert("Ya existe un usuario con ese nombre");
                    window.location.href="../administrador.php";
                </script>
            ');

        //echo $sql . " error " . $conexion->error;
    }
    $conexion->close();
?>

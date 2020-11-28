<?php
include("../php/conexion.php");

$username = $_POST['l-username'];
$pass =  $_POST['l-password'];
	
	$sql= "SELECT username FROM usuario WHERE username='$username'";
	$myusuario= $conexion->query($sql);
    $nmyusuario= mysqli_num_rows($myusuario);
    
	if ($nmyusuario != 0){
		$sql = "SELECT username FROM usuario WHERE username = '".$username."' AND contraseña = '".$pass."'";
		$mypass = $conexion->query($sql);
		$nmypass = mysqli_num_rows($mypass);
		
		if($nmypass != 0){
            echo " <script language='JavaScript'>
                        alert('Inicio de sesión correcto'); 
                        window.location.href=\"../1-home/index.html\";
                    </script>";
			$dato=$conexion->query($sql);
			session_start();
			$_SESSION["autentica"] = "Si";
			echo $_SESSION["usuarioactual"]= $dato->username;
		}
		else{
			echo " <script language='JavaScript'>
                        alert('La contrasena del usuario no es correcta');
                        window.location.href=\"login.html\";
                    </script>";
		}
	}else{
			echo " <script language='JavaScript'>
                        alert('El usuario no existe');
                        window.location.href=\"login.html\";
                    </script>";
        }
        
	$conexion->close();
?>

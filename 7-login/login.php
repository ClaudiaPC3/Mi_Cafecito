<?php
include("../php/conexion.php");

$username = $_POST['l-username'];
$pass =  $_POST['l-password'];
	
	$sql= "SELECT username FROM usuario WHERE username='$username'";
	$myusuario= $conexion->query($sql);
    $nmyusuario= mysqli_num_rows($myusuario);
    
	if ($nmyusuario != 0){
		$sql = "SELECT * FROM usuario WHERE username = '".$username."' AND contraseña = '".$pass."'";
		$result = $conexion->query($sql);
		$nresult = mysqli_num_rows($result);

		$userData = $result -> fetch_assoc();
		
		if($nresult != 0){

			session_start();

			$_SESSION['username'] = $userData["username"];
			$_SESSION['admin'] = $userData["admin"];

			echo " <script language='JavaScript'>
						alert('Inicio de sesión correcto'); 
						window.location.href=\"../1-home/index.php\";
					</script>";
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

<?php
	/*-- Variables de servidor --*/

	$servidor = "127.0.0.1";
	$usuario  = "root";
	$psw	  = "";
	$bdd	  = "micafecito";


	/*-- Objeto de conexion --*/

	$conexion = new mysqli($servidor, $usuario, $psw, $bdd);

	/*-- Verifica conexion --*/

	if($conexion->connect_error)
	{
		echo "<br>Hubo un error al intentar conectar con el servidor: ".$conexion->connect_error;
		exit(1);
	}
	else
	{
		$conexion->set_charset("utf8");
	}


?>
<?php
include("../../php/conexion.php");
//header("Status: 301 Moved Permanently");

$nombre = $_POST ['nombre'];
$categoria = $_POST ['categoria'];
$tamanio = $_POST ['porcion'];
$precio = $_POST ['precio'];
$descripcion = $_POST ['descripcion'];
$img='img_menu';

if(isset($_FILES[$img])){
    echo 'subido'.$_FILES[$img]['name'];
    $destino='../img/plat/'.$_FILES[$img]['name'];
    $guardar = "../../img/plat/".$_FILES[$img]['name'];
    $ruta=$_FILES[$img]['tmp_name'];
    copy($ruta,$guardar);
}else{
    echo 'no subido';
}


$sqlInsertPlatillo="INSERT INTO platillo (nombre, categoria, porcion, precio, descripcion, imagen) VALUES ('$nombre', '$categoria', $tamanio, $precio, '$descripcion', '$destino');";

if($conexion->query($sqlInsertPlatillo) == TRUE){
    echo"<script languaje='JavaScript'>
    alert('Platillo Agregado');
    </script>";
}else{
    echo "Error: ".$conexion->error;
}

$conexion->close();
header("Location: ../administrador.php");

?>

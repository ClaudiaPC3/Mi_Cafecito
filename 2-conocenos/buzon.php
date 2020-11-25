<?php
header("Status: 301 Moved Permanently");
header("Location: http://localhost:8080/sitioCompleto/contacto.html");
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$asunto = $_POST ['asunto'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];
$img='img_menu';

$datos = array(
       'nombre' => $nombre,
       'apellido' => $apellido,
       'asunto' => $asunto,
       'email' => $email,
       'mensaje' => $mensaje,
);


//creamos JSON
$json_string = json_encode($datos);
$file = "json/buzon.json";
$actual = file_get_contents($file); // toma los datos que estan en el img_menu json
if(empty($actual)){
    $actual = "[\n";
    $actual .= $json_string . "]";
}else{
    $actual = str_replace("]","",$actual); // el primer parametro es el que se va a sustituir, el segundo es por el cual se va a sustituir y el tercero es la cadena donde lo va a sustituir
    $actual .= ",\n" . $json_string . "]";
}

file_put_contents($file,$actual); 

?>

<?php
header("Status: 301 Moved Permanently");
header("Location: http://localhost:8080/sitioCompleto/administrador.html");
$img='img_gal';

if(isset($_FILES[$img])){
    echo 'subido'.$_FILES[$img]['name'];
    $destino='img/gal/'.$_FILES[$img]['name'];
    $ruta=$_FILES[$img]['tmp_name'];
    copy($ruta,$destino);
}else{
    echo 'no subido';
}


$datos = array(
       'imagen' => $destino,
);


//creamos JSON
$json_string = json_encode($datos);
$file = "json/galeria.json";
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

<?php
header("Status: 301 Moved Permanently");
header("Location: http://localhost:8080/sitioCompleto/membresia.html");
$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$password2 = $_POST ['password2'];

$datos = array(
       'username' => $username,
       'email' => $email,
       'password' => $password,
       'password2' => $password2,
);


//creamos JSON
$json_string = json_encode($datos);
$file = "json/sign.json";
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

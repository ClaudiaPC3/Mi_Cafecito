<?php
    include("../php/conexion.php");

    $sql = "SELECT * FROM platillo";
    $result = mysqli_query($conexion, $sql);

    $myArray = array();
    if ($result) {

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
        }
        echo json_encode($myArray);
    }

    $conexion->close();
?>

<?php
    /* header("Status: 301 Moved Permanently");
    header("Location: http://localhost:8080/sitioCompleto/administrador.html");
    $nombre = $_POST ['nombre'];
    $categoria = $_POST ['categoria'];
    $tamanio = $_POST ['porcion'];
    $precio = $_POST ['precio'];
    $descripcion = $_POST ['descripcion'];
    $img='img_menu';

    if(isset($_FILES[$img])){
        echo 'subido'.$_FILES[$img]['name'];
        $destino='img/plat/'.$_FILES[$img]['name'];
        $ruta=$_FILES[$img]['tmp_name'];
        copy($ruta,$destino);
    }else{
        echo 'no subido';
    }


    $datos = array(
        'nombre' => $nombre,
        'categoria' => $categoria,
        'tamanio' => $tamanio,
        'precio' => $precio,
        'imagen' => $destino,
        'descripcion' => $descripcion,
    );


    //creamos JSON
    $json_string = json_encode($datos);
    $file = "json/platillos.json";
    $actual = file_get_contents($file); // toma los datos que estan en el img_menu json
    if(empty($actual)){
        $actual = "[\n";
        $actual .= $json_string . "]";
    }else{
        $actual = str_replace("]","",$actual); // el primer parametro es el que se va a sustituir, el segundo es por el cual se va a sustituir y el tercero es la cadena donde lo va a sustituir
        $actual .= ",\n" . $json_string . "]";
    }

    file_put_contents($file,$actual);  */

?>

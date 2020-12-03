<?php
    include("../../php/conexion.php");

    
    $producto = $_POST['m-platillo'];
    $nombre = $_POST['m-nombre'];
    $porcion = $_POST['m-porcion'];
    $precio = $_POST['m-precio'];
    $categoria = $_POST['m-categoria'];
    $descripcion = $_POST['m-descripcion'];
    $imagen = $_FILES['m-img']['name'];
    
    $sql = "SELECT * FROM platillo WHERE id = $producto";
    $result = $conexion->query($sql);
    
    if($result) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $currentData = $row;
        }
    }
    
    
    if($nombre != '')
        $currentData['nombre'] = $nombre;
    if($porcion != '')
        $currentData['porcion'] = $porcion;
    if($precio != '')
        $currentData['precio'] = $precio;
    if($categoria != '')
        $currentData['categoria'] = $categoria;
    if($descripcion != '')
        $currentData['descripcion'] = $descripcion;
    if($imagen != '') {
        $currentData['imagen'] =  "../img/plat/" . $imagen;
        $target_file = "../../img/plat/" . basename($imagen);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["m-img"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["m-img"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["m-img"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $imagen )). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    $sql = "UPDATE platillo 
                SET nombre = '$currentData[nombre]', 
                    porcion = $currentData[porcion],
                    precio = $currentData[precio],
                    categoria = '$currentData[categoria]',
                    descripcion = '$currentData[descripcion]',
                    imagen = '$currentData[imagen]' 
                WHERE id = $currentData[id];";

    if($conexion->query($sql)) {
        echo ('
                <body style="background: #2A0859">
                    
                </body>
                <script LANGUAGE="JavaScript">
                    window.alert("Producto modificado de manera exitosa.");
                    window.location.href="../administrador.php";
                </script>
            ');
    } else {
        echo $sql . " error " . $conexion->error;
    }

    echo $imagen;

    $conexion->close();    

?>

<?php
    include("../../php/conexion.php");

    $id = $_POST['select-us']; 

    
try  {

    $stmt = $conexion->prepare("CALL admin_change('$id')");
    
    $stmt->execute();
        echo ('
        <script LANGUAGE="JavaScript">
            window.alert("permisos modificados");
            window.location.href="../administrador.php";
        </script>
        ');
   
    } catch (PDOException $e) {
    
        echo "<b>SQL Error #" . $e->getCode() . "</b> in <b>" . $e->getFile() . "</b> on line <b>" . $e->getLine() . ":</b> " . $e->getMessage() . "\n";
    }

    $conexion->close();    

    

?>

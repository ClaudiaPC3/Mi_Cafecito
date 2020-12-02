<?php
    @session_start();
    session_destroy();
    echo "  <script language='JavaScript'>
                alert('Se ha cerrado la sesión'); 
                window.location.href=\"../1-home/index.php\";
            </script>";
?>
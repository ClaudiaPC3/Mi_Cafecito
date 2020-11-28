<?php
session_start();
if ($_SESSION["autentica"] !="Si"){
	header('location: ../7-login/login.html');
	exit();
}
?>
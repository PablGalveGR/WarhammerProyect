<?php
//Inicio la sesi�n
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado2"] != "SI") {
	//si no existe, envio a la p�gina de autentificacion
	header("Location: user_log.php");
	//ademas salgo de este script
	exit();
} 
?>

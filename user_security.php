<?php
include ('con.php');
$SQL = "SELECT * FROM USERS WHERE cod = 1";
$RS=mysqli_query($con,$SQL);
$row=mysqli_fetch_assoc($RS);
//Inicio la sesi�n
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] != "SI") {
	//si no existe, envio a la pagina de autentificacion
	header("Location: user_log.php");
	//ademas salgo de este script
	exit();
}
else{
    $cod_usu=$row["cod"];
}
?>

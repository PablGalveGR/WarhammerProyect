<?php
$USU_P=$_POST["usuario"];
$PASSWD_P=sha1($_POST["pass"]);
include ("con.php");
$SQL = "SELECT * FROM USERS WHERE Nombre LIKE '$USU_P' AND PASSWD LIKE '$PASSWD_P'";
$RS=mysqli_query($con,$SQL);
$row=mysqli_fetch_assoc($RS);
$USU=$row["Nombre"];
$PASSWD=$row["PASSWD"];
$cod=$row["cod"];
//comprobamos si los datos son correctos
if ($_POST["usuario"]==$USU && $PASSWD_P==$PASSWD){
//Si son validos... creo una sesion
//creando sesion y guardando datos
session_start();
#session_id($cod);
$cod_usu=$cod;
$_SESSION["autentificado"]= "SI";
header ("Location: index.php");
}else {
//si no existe le mando otra vez a la portada
header("Location: user_log.php?error=data");
}
?>
<?php
include ('user_security.php');
include ("con_delete.php");
$cod=$_GET["cod"];
$SQL_DEL1="DELETE FROM EJER_UNI WHERE cod_ejer=$cod;";
$SQL_DEL2="DELETE FROM EJER_ANDA WHERE cod_ejer=$cod;";
$SQL_DEL3="DELETE FROM EJER_VEHI WHERE cod_ejer=$cod;";
$SQL_DEL4="DELETE FROM EJERCITO WHERE cod=$cod;";
mysqli_query($con, $SQL_DEL1);
mysqli_query($con, $SQL_DEL2);
mysqli_query($con, $SQL_DEL3);
mysqli_query($con, $SQL_DEL4);
header ("Location: usu_busq_ejer.php");
?>
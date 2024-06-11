<?php
include ('user_security.php');
include ("con_delete.php");
$cod_ejer=$_POST["cod_ejer"];
$cod_r=$_POST["cod_r"];
//echo "$cod_ejer<br>";
$ejercito_uni=$_POST["unit"];
$ejer_vehi=$_POST["vehi"];
$ejer_anda=$_POST["anda"];
foreach ($ejercito_uni AS $cod_unit => $cod){
    $num_unit=$_POST["a$cod"];
    $SQL_DEL1="DELETE FROM EJER_UNI WHERE cod_unit=$cod AND cod_ejer=$cod_ejer LIMIT $num_unit;";
    $RS_DEL1=mysqli_query($con,$SQL_DEL1);
}
foreach ($ejer_vehi AS $cod_vehi => $cod_ve){
    echo "$cod_ve<br>";
    $num_unit=$_POST["b$cod_ve"];
    echo $num_unit;
    $SQL_DEL2="DELETE FROM EJER_VEHI WHERE cod_vehi=$cod_ve AND cod_ejer=$cod_ejer LIMIT $num_unit;";
    $RS_DEL2=mysqli_query($con,$SQL_DEL2);
}
foreach ($ejer_anda AS $cod_anda => $cod_an){
 $num_unit=$_POST["c$cod_an"];
    $SQL_DEL3="DELETE FROM EJER_ANDA WHERE cod_anda=$cod_an AND cod_ejer=$cod_ejer;";
    $RS_DEL3=mysqli_query($con,$SQL_DEL3);
}
header ("Location: ejer_usu.php?cod=$cod_ejer&cod_r=$cod_r");
?>
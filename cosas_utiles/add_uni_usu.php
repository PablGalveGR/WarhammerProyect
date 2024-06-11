<?php
include ("con_insert.php");
$cod_ejer=$_POST["cod_ejer"];
//echo "$cod_ejer<br>";
$ejercito_uni=$_POST["unit"];
$ejer_vehi=$_POST["vehi"];
$ejer_anda=$_POST["anda"];
foreach ($ejercito_uni AS $cod_unit => $cod){
    //echo "$cod<br>";
    $num_unit=$_POST["a$cod"];
    for($i=$num_unit; $i>0; $i--){
        $cod_ej_uni=rand(0,999999999);
        $SQL_UNI="INSERT INTO EJER_UNI VALUES ($cod_ej_uni, $cod_ejer, $cod);";
        $RS_UNI=mysqli_query($con,$SQL_UNI);
    //echo "$SQL_UNI<br>";
}
}
foreach ($ejer_vehi AS $cod_vehi => $cod_ve){
    //echo "$cod_ve<br>";
    $num_ve=$_POST["b$cod_ve"];
    for($i=$num_ve; $i>0; $i--){
        $cod_ej_ve=rand(0,999999999);
        $SQL_VEHI="INSERT INTO EJER_VEHI VALUES ($cod_ej_ve, $cod_ejer, $cod_ve);";
        $RS_VEHI=mysqli_query($con,$SQL_VEHI);
       //echo "$SQL_VEHI<br>";
    }
    //echo "$num_ve <br>";
}
foreach ($ejer_anda AS $cod_anda => $cod_an){
    //echo "$cod_an<br>";
    $num_an=$_POST["c$cod_an"];
    for($i=$num_an; $i>0; $i--){
        $cod_ej_an=rand(0,999999999);
        $SQL_AN="INSERT INTO EJER_ANDA VALUES ($cod_ej_an, $cod_ejer, $cod_an);";
        $RS_AN=mysqli_query($con,$SQL_AN);
        //echo "$SQL_AN<br>";
    }
    //echo "$num_an <br>";
}
header ("Location: ejer_usu.php?cod=$cod_ejer");
?>
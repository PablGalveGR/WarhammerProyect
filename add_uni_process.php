<?php
include ('security.php');
include ("con_insert.php");
    $cod=rand(0,999999999);
    $nom_unit=$_POST['Nombre_F'];
    $HA_unit=$_POST['HA_F'];
    $HP_unit=$_POST['HP_F'];
    $F_unit=$_POST['F_F'];
    $R_unit=$_POST['R_F'];
    $H_unit=$_POST['H_F'];
    $I_unit=$_POST['I_F'];
    $A_unit=$_POST['A_F'];
    $L_unit=$_POST['L_F'];
    $SV_unit=$_POST['SV_F'];
    $Puntos_unit=$_POST['Puntos_F'];
    $Raza=$_POST['Raza_F'];
    $Cantidad=$_POST['Cantidad_F'];
    $tip_unit=$_POST['Tipo_F'];
    $clas_unit=$_POST['Clase_F'];
    //Upload//
    if (is_uploaded_file ($_FILES['imagen']['tmp_name'])){
        $filename=$_FILES['imagen']['name'];
        $ext = substr($filename, strrpos($filename, '.') + 1);
        //echo $ext;
	    $nombreDirectorio = "img/wiki/";
	//$nombreFichero = $_FILES['imagen']['name'];
	    $nombreFichero=$nom_unit;
	    $nombreFichero_ext="$nombreFichero.$ext";
	    $nombreCompleto = $nombreDirectorio . $nombreFichero_ext;
	        if (is_file($nombreCompleto))
	        {
		    $idUnico = time();
		    $nombreFichero = $idUnico . "-" . $nombreFichero_ext;
	        }
	    move_uploaded_file ($_FILES['imagen']['tmp_name'],
	    $nombreDirectorio . $nombreFichero_ext);
	    //print ("Fichero $nombreFichero_ext subido.\n");


        }
        else{
        //print ("No se ha podido subir el fichero\n");
        }
    $img=$nombreCompleto;
    $SQL_IN="INSERT INTO UNIDAD values
    ($cod, '$nom_unit', $HA_unit, $HP_unit, $F_unit, $R_unit, $H_unit, $I_unit, $A_unit, $L_unit, '$SV_unit', $Puntos_unit, '$img', $Raza, $Cantidad, $tip_unit, $clas_unit);";
    $RS_IN=mysqli_query($con,$SQL_IN);
    header ("Location: detalle.php?cod=$cod");
    mysqli_close($con);
?>
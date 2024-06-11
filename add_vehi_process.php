<?php
include ('security.php');
include ("con_insert.php");
$cod=rand(0,999999999);
    $Nombre_F=$_POST['Nombre_F'];
    $HP_F=$_POST['HP_F'];
    $BF_F=$_POST['BF_F'];
    $BL_F=$_POST['BL_F'];
    $BP_F=$_POST['BP_F'];
    $PA_F=$_POST['PA_F'];
    $Raza_F=$_POST['Raza_F'];
    $Tipo_F=$_POST['Tipo_F'];
    $Clase_F=$_POST['Clase_F'];
    $Puntos_F=$_POST['Puntos_F'];
    //Upload//
    if (is_uploaded_file ($_FILES['imagen']['tmp_name'])){
        $filename=$_FILES['imagen']['name'];
        $ext = substr($filename, strrpos($filename, '.') + 1);
        //echo $ext;
	    $nombreDirectorio = "img/wiki/";
	//$nombreFichero = $_FILES['imagen']['name'];
	    $nombreFichero=$Nombre_F;
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
        print ("No se ha podido subir el fichero\n");
        }
    $img=$nombreCompleto;
    $SQL_IN="INSERT INTO VEHICULOS values
    ($cod, '$Nombre_F', $HP_F, $BF_F, $BL_F, $BP_F, $PA_F,  $Puntos_F, $Raza_F, $Tipo_F, $Clase_F, '$img');";
    $RS_IN=mysqli_query($con,$SQL_IN);
    if($RS_IN){
        //echo "Se ha añadido  $Nombre_F";
    }
    else{
       // echo "No se ha añadido $Nombre_F";
        //echo $SQL_IN;
    }
    mysqli_close($con);
    header ("Location: detalle_Tank.php?cod=$cod");
?>
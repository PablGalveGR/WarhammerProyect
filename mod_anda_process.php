<?php
include ('security.php');
include ("con_update.php");
    $cod_F=$_POST['cod_F'];
    $Nombre_F=$_POST['Nombre_F'];
    $HA_F=$_POST['HA_F'];
    $HP_F=$_POST['HP_F'];
    $F_F=$_POST['F_F'];
    $BF_F=$_POST['BF_F'];
    $BL_F=$_POST['BL_F'];
    $BP_F=$_POST['BP_F'];
    $I_F=$_POST['I_F'];
    $A_F=$_POST['A_F'];
    $PA_F=$_POST['PA_F'];
    $Raza_F=$_POST['Raza_F'];
    $Tipo_F=$_POST['Tipo_F'];
    $Clase_F=$_POST['Clase_F'];
    $Puntos_F=$_POST['Puntos_F'];
    if(empty($_FILES['imagen']['name'])){
        $ima=$_POST["img"];
        }
        else{
            //Upload//
            if(unlink($_POST["img"])){
                //echo "El archivo eliminado</br>";
            }
            else{
                //echo "NO eliminada imagen</br>";
            }
            if (is_uploaded_file ($_FILES['imagen']['tmp_name'])){
            $filename=$_FILES['imagen']['name'];
            $ext = substr($filename, strrpos($filename, '.') + 1);
            //echo $ext;
            $nombreDirectorio = "img/wiki/";
        //$nombreFichero = $_FILES['imagen']['name'];
            $nombreFichero=$Nombre_F;
            $nombreFichero="$nombreFichero.$ext";
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
            $ima=$nombreCompleto;
                if (is_file($nombreCompleto))
                {
                $idUnico = time();
                $nombreFichero = $idUnico . "-" . $nombreFichero;
                $ima=$nombreCompleto;
                }
            move_uploaded_file ($_FILES['imagen']['tmp_name'],
            $nombreDirectorio . $nombreFichero);
            //print ("Fichero $nombreFichero subido.\n");
    
            }
            else{
            //print ("No se ha podido subir el fichero\n");
            }
        }
        if ($ima==$_POST["img"]){
            $SQL="UPDATE ANDADORES 
          SET Nombre='$Nombre_F', HA=$HA_F, HP=$HP_F, F=$F_F, BF=$BF_F, BL=$BL_F, BP=$BP_F, I=$I_F, A=$A_F, PA=$PA_F, Raza=$Raza_F, Tipo=$Tipo_F, Clase=$Clase_F, Puntos=$Puntos_F, Imagen='$ima'
          WHERE cod=$cod_F";
          mysqli_query($con,$SQL);
            //echo "$SQL\n";
        }
        header ("Location: detalle_An.php?cod=$cod_F");
mysqli_close($con);
?>
<?php
include ('security.php');
include ("con_update.php");
    $cod_F=$_POST['cod_F'];
    $Nombre_F=$_POST['Nombre_F'];
    $HA_F=$_POST['HA_F'];
    $HP_F=$_POST['HP_F'];
    $F_F=$_POST['F_F'];
    $R_F=$_POST['R_F'];
    $H_F=$_POST['H_F'];
    $I_F=$_POST['I_F'];
    $A_F=$_POST['A_F'];
    $L_F=$_POST['L_F'];
    $SV_F=$_POST['SV_F'];
    $Puntos_F=$_POST['Puntos_F'];
    $Raza_F=$_POST['Raza_F'];
    $Cantidad_F=$_POST['Cantidad_F'];
    $Tipo_F=$_POST['Tipo_F'];
    $Clase_F=$_POST['Clase_F'];
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
            echo $ext;
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
            print ("No se ha podido subir el fichero\n");
            }
        }
        if ($ima==$_POST["img"]){
    $SQL="UPDATE  UNIDAD 
          SET Nombre='$Nombre_F', HA=$HA_F, HP=$HP_F, F=$F_F, R=$R_F, H=$H_F, I=$I_F, A=$A_F, L=$L_F, SV=$SV_F, Puntos=$Puntos_F, Imagen='$ima', Raza=$Raza_F, Cantidad=$Cantidad_F, Tipo=$Tipo_F, Clase=$Clase_F
          WHERE cod=$cod_F";
          mysqli_query($con,$SQL);
        }
        header ("Location: detalle.php?cod=$cod_F");
mysqli_close($con);
?>
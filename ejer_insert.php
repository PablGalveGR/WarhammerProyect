<?php
session_start();
if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=="SI"){
    include ("cabecera_log.php");
}
   elseif(isset($_SESSION["autentificado2"]) && $_SESSION["autentificado2"]=="SI"){
      include ("cabecera_admin.php"); 
   }
else{
    include ("cabecera.php");
}
include ("con_insert.php");
session_start();
if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=="SI"){
    include ("cabecera_log.php");
    $cod_usu=1;
}
   elseif(isset($_SESSION["autentificado2"]) && $_SESSION["autentificado2"]=="SI"){
      include ("cabecera_admin.php"); 
   }
else{
    include ("cabecera.php");
}
$cod_ejer=$_POST["cod_ejer"];
//echo "$cod_ejer<br>";
//include ("cabecera.php");
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
?>
<table border="solid black" width=100% bgcolor=white>
<tr>
<td colspan=12 bgcolor=grey>
<center><h2>
Infanteria
</h2></center>
</td>
</tr>
<?php
$SQL_SELECT="SELECT * FROM UNIDAD u WHERE u.cod IN (SELECT ej.cod_unit FROM EJER_UNI ej WHERE cod_ejer=$cod_ejer)";
//echo "$SQL_SELECT";
$RS_SELECT=mysqli_query($con,$SQL_SELECT);
                while($row=mysqli_fetch_assoc($RS_SELECT)){
                    $cod=$row["cod"];
                    $nom_unit=$row["Nombre"];
                    $tip_unit=$row["Tipo"];
                    $clas_unit=$row["Clase"];
                    $HA_unit=$row["HA"];
                    $HP_unit=$row["HP"];
                    $F_unit=$row["F"];
                    $R_unit=$row["R"];
                    $H_unit=$row["H"];
                    $I_unit=$row["I"];
                    $A_unit=$row["A"];
                    $L_unit=$row["L"];
                    $cant_unit=$row["Cantidad"];
                    $SV_unit=$row["SV"];
                    $Punt_unit=$row["Puntos"];
                    $img=$row["Imagen"];
                    $Raza=$row["Raza"];
                    $SQL_COUNT_UNIT="SELECT COUNT(cod_unit) AS cantidad FROM EJER_UNI WHERE cod_unit=$cod AND cod_ejer=$cod_ejer";
                    $RS_SQL_COUNT_UNIT=mysqli_query($con,$SQL_COUNT_UNIT);
                    while($row1=mysqli_fetch_assoc($RS_SQL_COUNT_UNIT)){
                        $cant_unit=$row1["cantidad"];
                    for($i=$cant_unit; $i>0;$i--){
                
?>
    <tr>
        <td bgcolor='#bcc4d8'>
        <center>Nombre</center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php echo $nom_unit?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Tipo de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;"><center>
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_unit"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Clase de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;"><center>
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_unit"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td style="padding-right: 15px;">
        <td bgcolor='#bcc4d8'>
        <center>
        Raza
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;"><center>
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Puntos
        <center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;"><center>
        <?php
            echo "$Punt_unit";
            ?>
        </center></td>
</tr>
<tr bgcolor='#bcc4d8'>
        <td>
        <center>HA</center>
        </td>
        <td>
        <center>HP</center>
        </td>
        <td>
        <center>F</center>
        </td>
        <td>
        <center>R</center>
        </td>
        <td>
        <center>H</center>
        </td>
        <td>
        <center>I</center>
        </td>
        <td>
        <center>A</center>
        </td>
        <td>
        <center>L</center>
        </td>
        <td style="padding-right: 15px;">
        <center>SV</center>
        </td>
        <td>
        <center>Cantidad de miniaturas</center>
        </td>
        <td>
        <center>Imagen</center>
        </td>
    </tr>

<tr bgcolor='#d8dadf'>
        <td><center>
            <?php
            echo "$HA_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$HP_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$F_unit";
        ?>
        </center>
        </td>
        
        <td><center>
        <?php
            echo "$R_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$H_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$I_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$A_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$L_unit";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$SV_unit";
            ?>
            </center>
        </td>                
        <td><center>
        <?php
            echo "$cant_unit";
            ?>
            </center>
        </td>
        <td>
        <center>
            <?php
                echo "<img src='$img' height='40%' width='40%'>";
            ?>
        </center>
        </td>
    </tr>

<?php
                    }
                }
            }
?>
<tr>
    <td colspan=12 bgcolor=grey>
    <center><h2>
    <b>Vehiculos</b>
    </h2></center>
    </td>
</tr>
<?php
$SQL_SELECT="SELECT * FROM VEHICULOS u WHERE u.cod IN (SELECT ej.cod_vehi FROM EJER_VEHI ej WHERE cod_ejer=$cod_ejer)";
            //echo "$SQL_SELECT";
$RS_SELECT=mysqli_query($con,$SQL_SELECT);
while($row=mysqli_fetch_assoc($RS_SELECT)){
$cod_ve=$row["cod"];
$nom_ve=$row["Nombre"];
$tip_ve=$row["Tipo"];
$clas_ve=$row["Clase"];
$HP_ve=$row["HP"];
$BF_ve=$row["BF"];
$BL_ve=$row["BF"];
$BP_ve=$row["BP"];
$PA_ve=$row["PA"];
$Punt_ve=$row["Puntos"];
$img=$row["Imagen"];
$Raza=$row["Raza"];
$SQL_COUNT_UNIT="SELECT COUNT(cod_vehi) AS cantidad FROM EJER_VEHI WHERE cod_vehi=$cod_ve AND cod_ejer=$cod_ejer";
//echo "$SQL_COUNT_UNIT";
                    $RS_SQL_COUNT_UNIT=mysqli_query($con,$SQL_COUNT_UNIT);
                    while($row1=mysqli_fetch_assoc($RS_SQL_COUNT_UNIT)){
                        $cant_unit=$row1["cantidad"];
                    for($i=$cant_unit; $i>0;$i--){
?>
<tr>
        <td bgcolor='#bcc4d8'>
        <center>
        Nombre
        </center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php echo $nom_ve ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8'>
        <center>
        Tipo de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_ve"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' class="dat">
        <center>
        Clase de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_ve"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8'>
        <center>
        Raza
        </center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </center>
        </td> 
        <td bgcolor='#bcc4d8'>
        <center>
        Puntos
        <center>
        </td>
        <td bgcolor='#d8dadf'>
        <center>
        <?php
            echo "$Punt_ve";
            ?>
        <center>
        </td>
    </tr>
    <tr bgcolor='#bcc4d8'>
        <td>
        <center>HP</center>
        </td>
        <td>
        <center>BF</center>
        </td>
        <td>
        <center>BL</center>
        </td>
        <td>
        <center>BP</center>
        </td>
        <td>
        <center>PA</center>
        </td>
        <td>
        <center>Imagen</center>
        </td>
</tr>
<tr bgcolor='#d8dadf'>
        <td>
        <center>
        <?php
            echo "$HP_ve";
            ?>
            </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$BF_ve";
        ?>
        </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$BL_ve";
            ?>
            </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$BP_ve";
            ?>
            </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$PA_ve";
            ?>
            </center>
        </td>
        <td>
        <center>
            <?php
                 echo "<img src='$img' height='40%' width='40%'>";
            ?>
        </center>
        </td>
    </tr>
    
<?php
        }
    }
}
?>
<tr>
    <td colspan=12 bgcolor=grey>
    <center><h2>
    <b>Andadores</b>
    </h2></center>
    </td>
</tr>
<?php
$SQL_SELECT="SELECT * FROM ANDADORES u WHERE u.cod IN (SELECT ej.cod_anda FROM EJER_ANDA ej WHERE ej.cod_ejer=$cod_ejer)";
//echo "$SQL_SELECT";
$RS_SELECT=mysqli_query($con,$SQL_SELECT);
while($row=mysqli_fetch_assoc($RS_SELECT)){
$cod_an=$row["cod"];
$nom_an=$row["Nombre"];
$tip_an=$row["Tipo"];
$clas_an=$row["Clase"];
$HA_an=$row["HA"];
$HP_an=$row["HP"];
$F_an=$row["F"];
$HP_ve=$row["HP"];
$BF_ve=$row["BF"];
$BL_ve=$row["BF"];
$BP_ve=$row["BP"];
$PA_ve=$row["PA"];
$I_an=$row["I"];
$A_an=$row["A"];
$Punt_an=$row["Puntos"];
$img=$row["Imagen"];
$Raza=$row["Raza"];
$SQL_COUNT_UNIT="SELECT COUNT(cod_anda) AS cantidad FROM EJER_ANDA WHERE cod_anda=$cod_an AND cod_ejer=$cod_ejer";
//echo "$SQL_COUNT_UNIT";
                    $RS_SQL_COUNT_UNIT=mysqli_query($con,$SQL_COUNT_UNIT);
                    while($row1=mysqli_fetch_assoc($RS_SQL_COUNT_UNIT)){
                        $cant_unit=$row1["cantidad"];
                    for($i=$cant_unit; $i>0;$i--){
?>
<tr>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Nombre
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;">
        <center>
        <?php echo $nom_an?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Tipo de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;">
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_an"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Clase de unidad
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;">
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_an"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8'>
        <center>
        Raza
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;">
        <center>
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </center>
        </td>
        <td bgcolor='#bcc4d8' style="padding-right: 15px;">
        <center>
        Puntos
        </center>
        </td>
        <td bgcolor='#d8dadf' style="padding-right: 15px;">
        <center>
        <?php
            echo "$Punt_an";
            ?>
        </center>
        </td>
</tr>

<tr bgcolor='#bcc4d8'>

        <td>
        <center>HA</center>
        </td>
        <td>
        <center>HP</center>
        </td>
        <td>
        <center>F</center>
        </td>
        <td>
        <center>BF</center>
        </td>
        <td>
        <center>BL</center>
        </td>
        <td>
        <center>BP</center>
        </td>
        <td>
        <center>PA</center>
        </td>
        <td>
        <center>I</center>
        </td>
        <td>
        <center>A</center>
        </td>
        <td>
        <center>Imagen</center>
        </td>
</tr>
<tr bgcolor='#d8dadf'>
        <td><center>
            <?php
            echo "$HA_an";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$HP_an";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$F_an";
        ?>
        </center>
        </td>
        <td>
        <center>
        <?php
            echo "$BF_ve";
        ?>
        </center>
        </td>
        <td>
        <center>
        <?php
            echo "$BL_ve";
            ?>
            </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$BP_ve";
            ?>
            </center>
        </td>
        
        <td>
        <center>
        <?php
            echo "$PA_ve";
            ?>
            </center>
        </td>      
        
        <td><center>
        <?php
            echo "$I_an";
            ?>
            </center>
        </td>
        
        <td><center>
        <?php
            echo "$A_an";
            ?>
            </center>
        </td>
        <td>
        <center>
            <?php
                 echo "<img src='$img' height='40%' width='40%'>";
            ?>
        </center>
        </td>
    </tr>
<?php
                    }
                }
            }
?>
</table>
<?php
mysqli_close($con);
include ("con_delete.php");
$SQL_DEL1="DELETE FROM EJER_UNI WHERE cod_ejer IN(SELECT cod FROM EJERCITO WHERE Usuario IS NULL)";
$SQL_DEL2="DELETE FROM EJER_ANDA WHERE cod_ejer IN(SELECT cod FROM EJERCITO WHERE Usuario IS NULL)";
$SQL_DEL3="DELETE FROM EJER_VEHI WHERE cod_ejer IN(SELECT cod FROM EJERCITO WHERE Usuario IS NULL)";
$SQL_DEL4="DELETE FROM EJERCITO WHERE Usuario IS NULL";
mysqli_query($con, $SQL_DEL1);
mysqli_query($con, $SQL_DEL2);
mysqli_query($con, $SQL_DEL3);
mysqli_query($con, $SQL_DEL4);
?>
<?php
            include("footer.php");
mysqli_close($con);
?>
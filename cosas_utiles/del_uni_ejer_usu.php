<?php
include ("cabecera.php");
include ("con_insert.php");
    $cod_ejer=$_GET["cod"];
    $cod_raza=$_GET["cod_r"];
?>

<table border="solid black" width=100% bgcolor="white">
<tr>
<td colspan=12>
<b>Infanteria</b>
</td>
</tr>
<form action='del_uni_usu.php' method='POST'>
<input type="hidden" name="cod_ejer" value="<?php echo $cod_ejer;?>">
<?php
    $SQL="SELECT * FROM UNIDAD u WHERE u.cod IN (SELECT ej.cod_unit FROM EJER_UNI ej WHERE cod_ejer=$cod_ejer)";
    $RS=mysqli_query($con,$SQL);
                while($row=mysqli_fetch_assoc($RS)){
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
                
?>
    <tr>
        <td>
        <center>Nombre</center>
        </td>
        <td>
        <?php echo $nom_unit?>
        </td>
        <td style="padding-right: 15px;">
        Tipo de unidad
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_unit"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td>
        <td style="padding-right: 15px;">
        Clase de unidad
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_unit"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td>
        <td>
        Raza
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </td>
        <td style="padding-right: 15px;">
        Puntos
        </td>
        <td style="padding-right: 15px;">
        <?php
            echo "$Punt_unit";
            ?>
        </td>
</tr>
<tr>
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
        <center>Cantidad de Unidades</center>
        </td>
        <td style="padding-right: 15px;">
        <center>Eliminar</center>
        </td>
    </tr>

<tr>
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
        <select name="<?php echo "a"."$cod"?>">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </td>
        <td>
        <input type='checkbox' name='unit[]' value=<?php echo $cod?>>
        </td>
    </tr>
        
<?php
}
?>
<tr>
    <td colspan=12>
    <b>Vehiculos</b>
    </td>
</tr>
<?php
    $SQL="SELECT * FROM VEHICULOS u WHERE u.cod IN (SELECT ej.cod_vehi FROM EJER_VEHI ej WHERE cod_ejer=$cod_ejer)";
    $RS=mysqli_query($con, $SQL);
    while($row=mysqli_fetch_assoc($RS)){
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
?>
<tr>
        <td>
        Nombre
        </td>
        <td>
        <?php echo $nom_ve?>
        </td>
        <td>
        Tipo de unidad
        </td>
        <td>
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_ve"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td>
        <td class="dat">
        Clase de unidad
        </td>
        <td>
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_ve"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td>
        <td>
        Raza
        </td>
        <td>
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </td> 
        <td>
        Puntos
        </td>
        <td>
        <?php
            echo "$Punt_ve";
            ?>
        </td>
    </tr>
    <tr>
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
        <center>Cantidad de unidades</center>
        </td>
        <td colspan=6>
        <center>Eliminar</center>
        </td>
</tr>
<tr>
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
        <select name="<?php echo "b"."$cod_ve"?>">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </td>
        <td colspan=6>
        <input type='checkbox' name='vehi[]' value=<?php echo $cod_ve?>>
        </td>
    </tr>
<?php
    }
?>
<tr>
    <td colspan=12>
    <b>Andadores</b>
    </td>
<?php
    $SQL="SELECT * FROM ANDADORES u WHERE u.cod IN (SELECT ej.cod_anda FROM EJER_ANDA ej WHERE ej.cod_ejer=$cod_ejer)";
    $RS=mysqli_query($con, $SQL);
    while($row=mysqli_fetch_assoc($RS)){
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
    $Raza=$row["Raza"];

?>
<tr>
        <td style="padding-right: 15px;">
        Nombre
        </td>
        <td style="padding-right: 15px;">
        <?php echo $nom_an?>
        </td>
        <td style="padding-right: 15px;">
        Tipo de unidad
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM TIPO WHERE cod=$tip_an"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td>
        <td style="padding-right: 15px;">
        Clase de unidad
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM CLASE WHERE cod=$clas_an"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_tipo=$row['Nombre'];
            print"$des_tipo";
        }
        ?>
        </td style="padding-right: 15px;">
        <td>
        Raza
        </td>
        <td style="padding-right: 15px;">
        <?php 
        $SQL2="SELECT Nombre FROM RAZA WHERE cod=$Raza"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $des_raza=$row['Nombre'];
            print"$des_raza";
        }
        ?>
        </td>
        <td style="padding-right: 15px;">
        Puntos
        </td>
        <td style="padding-right: 15px;">
        <?php
            echo "$Punt_an";
            ?>
        </td>
</tr>

<tr>

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
        <center>Cantidad de unidades</center>
        </td>
        <td colspan=6>
        <center>Eliminar</center>
        </td>
</tr>
<tr>
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
        <select name="<?php echo "c"."$cod_an"?>">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </td>
        <td colspan=6>
        <input type='checkbox' name='anda[]' value=<?php echo $cod_an?>>
        </td>
        
    </tr>
<?php
}
?>
<tr>
        <td colspan='12'>
        <center><input type="submit" name="send" value='Enviar'></center>
        </td>

</tr>
        </form>
        </table>
        </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Menu -->
        <div class="sonar-portfolio-menu">
            <div class="text-center portfolio-menu">
            </div>
        </div>
    </div>
<?php
    mysqli_close($con);
    include ("footer.php");
?>
<?php
include ('security.php');
include ('cabecera_admin.php');
?>
<table border="solid black" width=100% bgcolor=white>
<tr>
<td colspan=12 bgcolor=grey>
<center><h2>
Infanteria
</h2></center>
</td>
</tr>
<form action='#' method='POST'>
<?php
    include ("con.php");
    $SQL="SELECT * FROM UNIDAD";
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
        <td>
        <center>Modificar / Eliminar</center>
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
        <td>
        <center>
            <?php
                print"<a href='./mod_uni.php?cod=$cod'><img src='img/listado//modi.png' width='50' height='50'></a>";
                print"<a href='./del_uni.php?cod=$cod'><img src='img/listado/eli.png' width='50' height='50'></a>";
            ?>
        </td>
        </center>
    </tr>
        
<?php
}
?>
<tr>
    <td colspan=12 bgcolor=white>
    <center><h3>
    <a href='./add_uni.php'>Añadir unidad</a>
    </h3></center>
    </td>
</tr>
<tr>
    <td colspan=12 bgcolor=grey>
    <center><h2>
    <b>Vehiculos</b>
    </h2></center>
    </td>
</tr>
<?php
    $SQL="SELECT * FROM VEHICULOS";
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
        <td colspan=6>
        <center>Modificar / Eliminar</center>
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
        <td colspan=6>
        <center>
            <?php
                print"<a href='./mod_vehi.php?cod=$cod_ve'><img src='img/listado/modi.png' width='50' height='50'></a>";
                print"<a href='./del_vehi.php?cod=$cod_ve'><img src='img/listado/eli.png' width='50' height='50'></a>";
            ?>
        </center>
        </td>
    </tr>
<?php
    }
?>
<tr>
    <td colspan=12 bgcolor=white>
    <center><h3>
    <a href='./add_vehi.php'>Añadir Vehiculo</a>
    </h3></center>
    </td>
</tr>
<tr>
    <td colspan=12 bgcolor=grey>
    <center><h2>
    <b>Andadores</b>
    </h2></center>
    </td>
<?php
    $SQL="SELECT * FROM ANDADORES";
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
    $img=$row["Imagen"];
    $Raza=$row["Raza"];

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
        <td>
        <center>Modificar / Eliminar</center>
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
        <td>
        <center>
            <?php
                print"<a href='./mod_anda.php?cod=$cod_an'><img src='img/listado/modi.png' width='50' height='50'></a>";
                print"<a href='./del_anda.php?cod=$cod_an'><img src='img/listado/eli.png' width='50' height='50'></a>";
            ?>
        </center>
    </tr>
<?php
}
?>
    <tr>
    <td colspan=12 bgcolor=white>
    <center><h3>
    <a href='./add_anda.php'>Añadir andandor</a>
    </h3></center>
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
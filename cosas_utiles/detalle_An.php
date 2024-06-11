<?php
include ('cabecera.php');
include ('con.php');
$codi=$_GET["cod"];
$SQL="SELECT * FROM ANDADORES WHERE cod=$codi";
echo $SQL;
$RS=mysqli_query($con, $SQL);
while($row=mysqli_fetch_assoc($RS)){
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
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?php echo $img?>);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="h-100">
                        <h2><?php echo $nom_an?></h2>
    <table bgcolor="white" width=100%>
    <tr>
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
        <td style="padding-right: 15px;">
        <center>A</center>
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
        
        <td style="padding-right: 15px;"><center>
        <?php
            echo "$A_an";
            ?>
            </center>
        </td>
        
    </tr>
    </center>
    <tr>
        <td colspan=10>
        <center>Reglas especiales</center>
        </td>
    </tr>
    <tr>
        <td colspan=10>
        <?php 
        $SQL2="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , ANDA_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_anda=$codi"; 
        $RS2=mysqli_query($con,$SQL2);
        while($row=mysqli_fetch_assoc($RS2)){
            $nom_reg=$row["Nombre"];
            $des_reg=$row['Descripcion'];
            print "<b>$nom_reg</b><br>";
            print"$des_reg<br>";
        }
        ?>
        </td>
    </tr>
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
}
mysqli_close($con);
include ("footer.php");
?>
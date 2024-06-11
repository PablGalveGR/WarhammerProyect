<?php
include ('cabecera.php');
include ('con_delete.php');
if(isset($_GET['cod']))
	$cod=$_GET['cod'];
if(!isset($_POST['Eliminar'])){
$SQL="SELECT * FROM UNIDAD WHERE cod=$cod";
$RS=mysqli_query($con, $SQL);
while($row=mysqli_fetch_assoc($RS)){
	$cod_fig=$row["cod"];
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
}
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/wiki/delete_img.png);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="h-100">
                        <h2><?php echo $nom_unit?></h2>
    <table bgcolor="white" width=100%>
    <tr>
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
        $SQL2="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , UNIT_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_unit=$cod"; 
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
	<tr><td align=center colspan=10><h3>¿estas seguro que deseas eliminar esta figura?<h3></td></tr>
	<form action='#' method="post">
	<input type="hidden" name="cod" value="<?php echo $cod_fig; ?>">
    <input type="hidden" name="foto" value="<?php echo $img; ?>">
	<tr><td align=center colspan=10><input type="submit" name="Eliminar" value="eliminar"></td></tr>
	<form>
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
else{
    ?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/wiki/delete_img.png);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="h-100">
<?php
	$cod_fig=$_POST["cod"];
	$SQL2 ="DELETE FROM UNIDAD WHERE cod=$cod_fig";
	if(mysqli_query($con,$SQL2)){ 
		//echo "Registro eliminado con exito<br>";
    }
    if(!empty($_POST["foto"])){
	    if(unlink($_POST['foto'])){
		//echo "Imagen eliminada<br>";
	        }
	    else{
		//echo "No se a eliminado la imagen<br>";
            }
        }
    else{
       //echo "No tenia imagen<br>";
    }
    ?>
    <h2> Has eliminado la unidad </h2>
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
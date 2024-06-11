<?php
include ('security.php');
include ('cabecera_admin.php');
include ('con_delete.php');
if(isset($_GET['cod']))
	$cod=$_GET['cod'];
if(!isset($_POST['Eliminar'])){
$SQL="SELECT * FROM ANDADORES WHERE cod=$cod";
$RS=mysqli_query($con, $SQL);
while($row=mysqli_fetch_assoc($RS)){
    $cod_fig=$row["cod"];
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
        $SQL2="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , ANDA_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_anda=$cod"; 
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
    <tr><td align=center colspan=10><h3>¿estas seguro que deseas eliminar este andador?<h3></td></tr>
	<form action='#' method="post">
	<input type="hidden" name="cod" value="<?php echo $cod_fig; ?>">
    <input type="hidden" name="foto" value="<?php echo $img; ?>">
    </tr>
    <tr>
        <td align=center colspan=10>
            <h3><font color=black>¿Seguro que quieres eliminarlo?</font></h3>
        </td>
    </tr>
	<tr><td align=center colspan=10><input type="submit" name="Eliminar" value="Eliminar"></td></tr>
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
	$cod_and=$_POST["cod"];
	$SQL2 ="DELETE FROM ANDADORES WHERE cod=$cod_and";
	if(mysqli_query($con,$SQL2)){ 
        //echo "<h2>Registro eliminado con exito<h2>";
	}
	if(unlink($_POST['foto'])){
        //echo "<h2>Imagen eliminada</h2>";
	}
	else{
        //echo "<h2>No se a eliminado la imagen</h2>";
        echo "<h2>$SQL2</h2>";
    }
    ?>
    <h2> Has eliminado el andador </h2>
    <br>
    <a href="Wiki_admin.php"><h2> Volver al Listado </h2></a>
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
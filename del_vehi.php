<?php
include ('security.php');
include ('cabecera_admin.php');
include ('con_delete.php');
if(isset($_GET['cod']))
	$cod=$_GET['cod'];
if(!isset($_POST['Eliminar'])){
$SQL="SELECT * FROM VEHICULOS WHERE cod=$cod";
$RS=mysqli_query($con, $SQL);
while($row=mysqli_fetch_assoc($RS)){
    $cod_vehi=$row["cod"];
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
}
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/wiki/delete_img.png);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="justify-content-center h-100">
                    <div class="h-100">
                        <h2><?php echo $nom_ve?></h2>
    <table bgcolor="white" width=100%>
    <tr>
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
    </tr>
    <tr>
        <td colspan=8>
        <center>Reglas especiales</center>
        </td>
    </tr>
    <tr>
        <td>
        <?php 
        $SQL2="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , VEHI_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_vehi=$cod"; 
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
    <tr><td align=center colspan=10><h3>¿estas seguro que deseas eliminar este vehiculo?<h3></td></tr>
	<form action='#' method="post">
	<input type="hidden" name="cod" value="<?php echo $cod_vehi;?>">
    <input type="hidden" name="foto" value="<?php echo $img; ?>">
    </tr>
    <tr>
        <td align=center colspan=10>
            <h3><font color=black>¿Seguro que quieres eliminarlo?</font></h3>
        </td>
    </tr>
	<tr><td align=center colspan=10><input type="submit" name="Eliminar" value="Eliminar"></td></tr>

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
	$cod_vehi=$_POST["cod"];
	$SQL2 ="DELETE FROM VEHICULOS WHERE cod=$cod_vehi";
	if(mysqli_query($con,$SQL2)){ 
        //echo "<h2>Registro eliminado con exito<h2>";
	}
	if(unlink($_POST['foto'])){
        //echo "<h2>Imagen eliminada</h2>";
	}
	else{
        //echo "<h2>No se a eliminado la imagen</h2>";
        //echo "<h2>$SQL2</h2>";
    }
    ?>
    <h2> Has eliminado el vehiculo</h2>
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
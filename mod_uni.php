<?php
include ('security.php');
include ('cabecera_admin.php');
include("con_update.php");

$SQL2="SELECT *
	  FROM TIPO";
$RS2=mysqli_query($con,$SQL2);
$SQL3="SELECT *
	  FROM CLASE";
$RS3=mysqli_query($con,$SQL3);
$SQL4="SELECT *
	  FROM RAZA";
$RS4=mysqli_query($con,$SQL4);
	$SQL = "SELECT * 
			FROM UNIDAD 
			WHERE cod=".$_GET['cod'];
	$RS=mysqli_query($con,$SQL);
	while($fila=mysqli_fetch_assoc($RS)){
		$cod=$fila['cod'];
		$Nombre=$fila['Nombre'];
		$HA=$fila['HA'];
		$HP=$fila['HP'];
		$F=$fila['F'];
		$R=$fila['R'];
        $H=$fila['H'];
        $I=$fila['I'];
        $A=$fila['A'];
        $L=$fila['L'];
        $SV=$fila['SV'];
        $Puntos=$fila['Puntos'];
        $Imagen=$fila['Imagen'];
        $Raza=$fila['Raza'];
        $Cantidad=$fila['Cantidad'];
        $Tipo=$fila['Tipo'];
        $Clase=$fila['Clase'];
	}

?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="h-100">
    <table bgcolor="white" width=100%>
    <form action="mod_uni_process.php" method="post" ENCTYPE="multipart/form-data">
                    <tr>
                    <td>
                    <h2><input type="text" size=10 name="Nombre_F" value="<?php echo $Nombre;?>" style="border-color:#D5D2D2"></h2>
                    </td>
                    <td>
                    <img src=<?php echo "$Imagen"; ?>>
                    </td>
                    </tr>
    <input type="hidden" name="cod_F" value="<?php echo $cod;?>">

    <tr>
        <td style="padding-right: 15px;">
        Tipo de unidad
        </td>
        <td style="padding-right: 15px;">
        <SELECT name='Tipo_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS2)){
			$cod_tipo=$fila['cod'];
			$nom_tipo=$fila['Nombre'];
			echo "<OPTION value='$cod_tipo'> $nom_tipo";}
			?>
		</SELECT>
        </td>
        <td style="padding-right: 15px;">
        Clase de unidad
        </td>
        <td style="padding-right: 15px;">
        <SELECT name='Clase_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS3)){
			$cod_Clase=$fila['cod'];
			$nom_Clase=$fila['Nombre'];
			echo "<OPTION value='$cod_Clase'> $nom_Clase";}
			?>
		</SELECT>
        </td style="padding-right: 15px;">
        <td>
        Raza
        </td>
        <td style="padding-right: 15px;">
        <SELECT name='Raza_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS4)){
			$cod_raza=$fila['cod'];
			$nom_raza=$fila['Nombre'];
			echo "<OPTION value='$cod_raza'> $nom_raza";}
			?>
		</SELECT>
        </td>
        <td style="padding-right: 15px;" colspan=2>
        Puntos
        </td>
        <td style="padding-right: 15px;" colspan=2>
        <input type="text" size=2 name="Puntos_F" value="<?php echo $Puntos;?>" style="border-color:#D5D2D2">
        </td>
        <td>
        <img src=<?php echo "$Imagen"; ?> width='20%' height='20%'>
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
        <input type="text" size=1 name="HA_F" value="<?php echo $HA;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="HP_F" value="<?php echo $HP;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="F_F" value="<?php echo $F;?>" style="border-color:#D5D2D2">
        </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="R_F" value="<?php echo $R;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="H_F" value="<?php echo $H;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="I_F" value="<?php echo $I;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="A_F" value="<?php echo $A;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="L_F" value="<?php echo $L;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="SV_F" value="<?php echo $SV;?>" style="border-color:#D5D2D2">
            </center>
        </td>                
        <td><center>
        <input type="text" size=1 name="Cantidad_F" value="<?php echo $Cantidad;?>" style="border-color:#D5D2D2">
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
        $SQL5="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , UNIT_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_unit=$cod"; 
        $RS5=mysqli_query($con,$SQL5);
        while($row=mysqli_fetch_assoc($RS5)){
            $nom_reg=$row["Nombre"];
            $des_reg=$row['Descripcion'];
            print "<b>$nom_reg</b><br>";
            print"$des_reg<br>";
        }
        ?>
        </td>
    <tr>
        <td align=center colspan=10>
        <input type="hidden" name="img" value="<?php echo $Imagen;?>">
        <input type="file" name="imagen" value="imagen">
        </td>
    </tr>
    </tr>
    <tr><td align=center colspan=10><input type="submit" name="Modificar" value="Modificar"></td></tr>
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
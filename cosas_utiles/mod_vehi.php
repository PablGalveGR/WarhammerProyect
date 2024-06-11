<?php
include ('cabecera.php');
include("con.php");
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
			FROM VEHICULOS 
			WHERE cod=".$_GET['cod'];
	$RS=mysqli_query($con,$SQL);
	while($fila=mysqli_fetch_assoc($RS)){
		$cod=$fila['cod'];
		$Nombre=$fila['Nombre'];
		$HP=$fila['HP'];
		$BF=$fila['BF'];
        $BL=$fila['BL'];
        $BP=$fila['BP'];
        $PA=$fila['PA'];
        $Puntos=$fila['Puntos'];
        $Raza=$fila['Raza'];
        $Tipo=$fila['Tipo'];
		$Clase=$fila['Clase'];
		$Imagen=$fila['Imagen'];
	}
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?php echo $Imagen?>);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="justify-content-center h-100">
                    <div class="h-100">
                    <form action="mod_vehi_process.php" method="post">
                    <input type="hidden" size=3 name="cod" value="<?php echo $cod;?>">
                        <h2><input type="text" size=10 name="Nombre_F" value="<?php echo $Nombre;?>"></h2>
    <table bgcolor="white" width=100%>
    <tr>
        <td>
        Tipo de unidad
        </td>
        <td>
        <SELECT name='Tipo_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS2)){
			$cod_tipo=$fila['cod'];
            $nom_tipo=$fila['Nombre'];
            if ($cod_tipo==$Tipo){
            echo "<OPTION value='$cod_tipo' selected> $nom_tipo </OPTION>";
            }
            else{
			echo "<OPTION value='$cod_tipo'> $nom_tipo</OPTION>";}
            }
			?>
		</SELECT>
        </td>
        <td class="dat">
        Clase de unidad
        </td>
        <td>
        <SELECT name='Clase_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS3)){
			$cod_Clase=$fila['cod'];
            $nom_Clase=$fila['Nombre'];
            if ($cod_Clase==$Clase){
                echo "<OPTION value='$cod_Clase' selected> $nom_Clase </OPTION>";
                }
                else{
                echo "<OPTION value='$cod_Clase'> $nom_Clase </OPTION>";}
                }
			?>
		</SELECT>
        </td>
        <td>
        Raza
        </td>
        <td>
		<SELECT name='Raza_F'>
		<?php
		while($fila=mysqli_fetch_assoc($RS4)){
			$cod_raza=$fila['cod'];
            $nom_raza=$fila['Nombre'];
            if ($cod_raza==$Raza){
                echo "<OPTION value='$cod_raza' selected> $nom_raza  </OPTION>";
            }
            else{
                echo "<OPTION value='$cod_raza'> $nom_raza  </OPTION>";
            }
        }
			?>
		</SELECT>
        </td> 
        <td>
        Puntos
        </td>
        <td>
        <input type="text" size=2 name="Puntos_F" value="<?php echo $Puntos;?>">
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
        <input type="text" size=1 name="HP_F" value="<?php echo $HP;?>">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BF_F" value="<?php echo $BF;?>">
        </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BL_F" value="<?php echo $BL;?>">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BP_F" value="<?php echo $BP;?>"
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="PA_F" value="<?php echo $PA;?>">
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
        $SQL5="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , VEHI_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_vehi=$cod"; 
        $RS5=mysqli_query($con,$SQL5);
        while($row=mysqli_fetch_assoc($RS5)){
            $nom_reg=$row["Nombre"];
            $des_reg=$row['Descripcion'];
            print "<b>$nom_reg</b><br>";
            print"$des_reg<br>";
        }
        ?>
        </td>
    </tr>
    </tr>
        <td align=center colspan=10>
        <input type="hidden" name="img" value="<?php echo $Imagen;?>">
        <input type="file" name="imagen" value="Modificar">
        </td>
    </tr>
    <tr><td align=center colspan=10><input type="submit" name="modificar" value="Modificar"></td></tr>
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
include ("footer.php");
?>
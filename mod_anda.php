<?php
include ('security.php');
include ('cabecera_admin.php');
include ("con.php");
$SQL2="SELECT *
	  FROM TIPO";
$RS2=mysqli_query($con,$SQL2);
$SQL3="SELECT *
	  FROM CLASE";
$RS3=mysqli_query($con,$SQL3);
$SQL4="SELECT *
	  FROM RAZA";
$RS4=mysqli_query($con,$SQL4);
if(isset($_GET['cod'])){
	$SQL = "SELECT * 
			FROM ANDADORES 
			WHERE cod=".$_GET['cod'];
	$RS=mysqli_query($con,$SQL);
	while($fila=mysqli_fetch_assoc($RS)){
		$cod=$fila['cod'];
		$Nombre=$fila['Nombre'];
		$HA=$fila['HA'];
		$HP=$fila['HP'];
		$F=$fila['F'];
		$BF=$fila['BF'];
		$BL=$fila['BL'];
		$BP=$fila['BP'];
		$I=$fila['I'];
		$A=$fila['A'];
        $PA=$fila['PA'];
        $Puntos=$fila['Puntos'];
        $Raza=$fila['Raza'];
        $Tipo=$fila['Tipo'];
		$Clase=$fila['Clase'];
		$Imagen=$fila['Imagen'];
    }
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
                    <form action="mod_anda_process.php" method="post" ENCTYPE="multipart/form-data">
                    <tr>
                    <td>
                    <h2><input type="text" size=10 name="Nombre_F" value="<?php echo $Nombre;?>" style="border-color:#D5D2D2"></h2>
                    </td>
                    <td>
                    <img src=<?php echo "$Imagen"; ?>>
                    </td>
                    </tr>
    <input type="hidden" size=3 name="cod_F" value="<?php echo $cod;?>">
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
            if ($cod_tipo==$Tipo){
            echo "<OPTION value='$cod_tipo' selected> $nom_tipo </OPTION>";
            }
            else{
			echo "<OPTION value='$cod_tipo'> $nom_tipo</OPTION>";}
            }
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
            if ($cod_Clase==$Clase){
                echo "<OPTION value='$cod_Clase' selected> $nom_Clase </OPTION>";
                }
                else{
                echo "<OPTION value='$cod_Clase'> $nom_Clase </OPTION>";}
                }
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
        <td style="padding-right: 15px;" colspan=2>
        Puntos
        </td>
        <td style="padding-right: 15px;" colspan=2>
        <input type="text" size=2 name="Puntos_F" value="<?php echo $Puntos;?>" style="border-color:#D5D2D2">
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
        <td>
        <center>
        <input type="text" size=1 name="BF_F" value="<?php echo $BF;?>" style="border-color:#D5D2D2">
        </center>
        </td>
        <td>
        <center>
        <input type="text" size=1 name="BL_F" value="<?php echo $BL;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BP_F" value="<?php echo $BP;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="PA_F" value="<?php echo $PA;?>" style="border-color:#D5D2D2">
            </center>
        </td>      
        
        <td><center>
        <input type="text" size=1 name="I_F" value="<?php echo $I;?>" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td style="padding-right: 15px;"><center>
        <input type="text" size=1 name="A_F" value="<?php echo $A;?>" style="border-color:#D5D2D2">
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
        $SQL5="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , ANDA_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_anda=$cod"; 
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
    <tr>
        <td align=center colspan=10>
        <input type="hidden" name="img" value="<?php echo $Imagen;?>">
        <input type="file" name="imagen" value="imagen">
        </td>
    </tr>
    <tr>
    <td align=center colspan=10><input type="submit" name="modificar" value="Modificar"></td>
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
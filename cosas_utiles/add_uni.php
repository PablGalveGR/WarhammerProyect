<?php
include ('cabecera.php');
include ("con_insert.php");
$SQL2="SELECT *
	  FROM TIPO";
$RS2=mysqli_query($con,$SQL2);
$SQL3="SELECT *
	  FROM CLASE";
$RS3=mysqli_query($con,$SQL3);
$SQL4="SELECT *
	  FROM RAZA";
$RS4=mysqli_query($con,$SQL4);
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
<form action="add_uni_process.php" method="post" ENCTYPE="multipart/form-data">
                    <tr>
                    <td>Nombre</td>
                    </tr>
                    <tr>    
                        <td>
                        <h2><input type="text" size=10 name="Nombre_F"></h2>
                        </td>
                    </tr>
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
        <td style="padding-right: 15px;">
        Puntos
        </td>
        <td style="padding-right: 15px;">
        <input type="text" size=2 name="Puntos_F">
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
        <input type="text" size=1 name="HA_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="HP_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="F_F">
        </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="R_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="H_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="I_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="A_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="L_F">
            </center>
        </td>
        
        <td><center>
        <input type="text" size=1 name="SV_F">
            </center>
        </td>                
        <td><center>
        <input type="text" size=1 name="Cantidad_F">
            </center>
        </td>
        
    </tr>
    <tr>
     <td>
        Imagen
     </td>
     <td <td colspan=9>
     <center>
        <input type="file" name="imagen" value="imagen">
    </center>
     </td>
    </tr>
    <tr>
        <td align=center colspan=10>
            <input type="submit" name="crear" value="Crear">
        </td>
    </tr>
    </form>
    </table>
   
   
                </div>
            </div>
        </div>
<?php
    mysqli_close($con);
include ("footer.php");
?>
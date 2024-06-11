<?php
include ('security.php');
include ('cabecera_admin.php');
include("con_insert.php");
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
    <form action="add_vehi_process.php" method="post" ENCTYPE="multipart/form-data">
                    <tr>
                    <td>Nombre</td>
                    </tr>
                    <tr>    
                        <td>
                        <h2><input type="text" size=10 name="Nombre_F" style="border-color:#D5D2D2"></h2>
                        </td>
                    </tr>
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
			echo "<OPTION value='$cod_tipo'> $nom_tipo";}
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
			echo "<OPTION value='$cod_Clase'> $nom_Clase";}
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
			echo "<OPTION value='$cod_raza'> $nom_raza";}
			?>
		</SELECT>
        </td> 
        <td>
        Puntos
        </td>
        <td>
        <input type="text" size=2 name="Puntos_F" style="border-color:#D5D2D2">
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
        <input type="text" size=1 name="HP_F" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BF_F" style="border-color:#D5D2D2">
        </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BL_F" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="BP_F" style="border-color:#D5D2D2">
            </center>
        </td>
        
        <td>
        <center>
        <input type="text" size=1 name="PA_F" style="border-color:#D5D2D2">
            </center>
        </td>      
    </tr>
    <tr>
        <td colspan=1>
        <center>Imagen</center>
        </td>
        <td colspan=9>
        <center>
            <input type="file" name="imagen" value="imagen" style="border-color:#D5D2D2">
        </center>
        </td>
    </tr>
    <tr><td align=center colspan=10><input type="submit" name="crear" value="crear"></td></tr>
    </form>
	</table>
                </div>
            </div>
        </div>
<?php
mysqli_close($con);
include ("footer.php");
?>
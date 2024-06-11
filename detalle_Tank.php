<?php
session_start();
if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=="SI"){
    include ("cabecera_log.php");
}
   elseif(isset($_SESSION["autentificado2"]) && $_SESSION["autentificado2"]=="SI"){
      include ("cabecera_admin.php"); 
   }
else{
    include ("cabecera.php");
}
include ('con.php');
$codi=$_GET["cod"];
$SQL="SELECT * FROM VEHICULOS WHERE cod=$codi";
$RS=mysqli_query($con, $SQL);
while($row=mysqli_fetch_assoc($RS)){
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
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?php echo $img?>);"></div>
        
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
        $SQL2="SELECT REG.Nombre, REG.Descripcion FROM REG_ESP REG , VEHI_REG UNIT WHERE REG.cod= UNIT.cod_reg AND UNIT.cod_vehi=$codi"; 
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
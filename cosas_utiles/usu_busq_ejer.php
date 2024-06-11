<?php
include ("con.php");
include ("cabecera.php");
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/portfolio.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="h-100">
                    <h2>Selecciona un Ejercito</h2>
                    <table bgcolor="white" width=100%>
                    <tr>
                    <td>
                    Nombre
                    </td>
                    <td>
                    Raza
                    </td>
                    <td>
                    Faccion
                    </td>
                    <td>
                    Puntos
                    </td>
                    </tr>
<?php
$SQL_SELECT ="SELECT * FROM EJERCITO WHERE Usuario=1";
$RS_SELECT=mysqli_query($con,$SQL_SELECT);
while($row=mysqli_fetch_assoc($RS_SELECT)){
    $cod_ejer=$row["cod"];
    $Nom=$row["Nombre"];
    $Raza=$row["Raza"];
    $Fac=$row["Faccion"];
    
    $SQL_SUM="SELECT SUM(puntos) AS sum_uni FROM UNIDAD u WHERE cod IN(SELECT cod_unit FROM EJER_UNI WHERE cod_ejer=$cod_ejer);";
    $SQL_cant1="SELECT count(cod_unit) AS cant FROM EJER_UNI WHERE cod_ejer=$cod_ejer GROUP BY cod_unit;";
    $SQL_SUM2="SELECT SUM(puntos) AS sum_vehi FROM VEHICULOS u WHERE cod IN(SELECT cod_vehi FROM EJER_VEHI WHERE cod_ejer=$cod_ejer);";
    $SQL_cant2="SELECT count(cod_vehi) AS cant FROM EJER_VEHI WHERE cod_ejer=$cod_ejer GROUP BY cod_vehi;";
    $SQL_SUM3="SELECT SUM(puntos) AS sum_anda FROM ANDADORES u WHERE cod IN(SELECT cod_anda FROM EJER_ANDA WHERE cod_ejer=$cod_ejer);";
    $SQL_cant3="SELECT count(cod_anda) AS cant FROM EJER_ANDA WHERE cod_ejer=$cod_ejer GROUP BY cod_anda;";
    $RS_SELECT1=mysqli_query($con,$SQL_SUM);
    while($row=mysqli_fetch_assoc($RS_SELECT1)){
        $Punt_uni=$row["sum_uni"];
    }
    $RS_cant1=mysqli_query($con,$SQL_cant1);
    while($row=mysqli_fetch_assoc($RS_cant1)){
        $cant_uni=$row["cant"];
    }
    $RS_SELECT2=mysqli_query($con,$SQL_SUM2);
    while($row=mysqli_fetch_assoc($RS_SELECT2)){
        $Punt_vehi=$row["sum_vehi"];
    }
    $RS_cant2=mysqli_query($con,$SQL_cant2);
    while($row=mysqli_fetch_assoc($RS_cant2)){
        $cant_vehi=$row["cant"];
    }
    $RS_SELECT3=mysqli_query($con,$SQL_SUM3);
    while($row=mysqli_fetch_assoc($RS_SELECT3)){
        $Punt_anda=$row["sum_anda"];
    }
    $RS_cant3=mysqli_query($con,$SQL_cant3);
    while($row=mysqli_fetch_assoc($RS_cant3)){
        $cant_anda=$row["cant"];
    }
    $res=($Punt_uni*$cant_uni)+($Punt_anda*$cant_anda)+($Punt_vehi*$cant_vehi);
    
?>
                    <tr>
                    <td>
                    <a href="ejer_usu.php?cod=<?php echo $cod_ejer?>"><?php echo $Nom?></a>
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
                    <?php 
                        $SQL2="SELECT Nombre FROM FACCION_RAZA WHERE cod=$Fac"; 
                        $RS2=mysqli_query($con,$SQL2);
                        while($row=mysqli_fetch_assoc($RS2)){
                        $des_raza=$row['Nombre'];
                            print"$des_raza";
                        }
        ?>
                    </td>
                    <td>
                    <?php echo $res?>
                    </td>
                    </tr>
                    
                    </div>
                </div>
            </div>
        </div>
<?php
}

?>
    </table>
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
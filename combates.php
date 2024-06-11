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

$SQL="SELECT * FROM UNIDAD";
$RS=mysqli_query($con, $SQL);

$SQL2="SELECT * FROM UNIDAD";
$RS2=mysqli_query($con, $SQL2);
if(!isset($_POST['calcular'])){
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/portfolio.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="justify-content-center h-100">
                    <div class="h-100">
                        <h2>Calculador de combates</h2>
    <form action='#' method='post'>
    <table width=100%>
    <tr>
    <td><center><h3>Atacante</h3></center></td>
    <td>		
    <SELECT name='Atacante'>
		<?php
		while($row=mysqli_fetch_assoc($RS)){
            $cod=$row["cod"];
            $nom_unit=$row["Nombre"];
			echo "<OPTION value='$cod'>$nom_unit";}
			?>
		</SELECT>
    </td>
    <tr>
    <td><center><h3>Defensor</h3></center></td>
    <td>
    <SELECT name='Defensor'>
		<?php
		while($row=mysqli_fetch_assoc($RS2)){
            $cod2=$row["cod"];
            $nom_unit2=$row["Nombre"];
			echo "<OPTION value='$cod2'> $nom_unit2";}
			?>
		</SELECT>
    </td>
    </tr>
    <tr><td colspan=2><center><h3><input type="submit" name="calcular" value="calcular"></h3></center></td></tr>
    </table>
    </form>
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
$cod_ata=$_POST["Atacante"];
$cod_def=$_POST["Defensor"];
$SQL3="SELECT * FROM UNIDAD WHERE cod=$cod_ata";
    $RS3=mysqli_query($con, $SQL3);
    while($row=mysqli_fetch_assoc($RS3)){
    $cod_unit=$row['cod'];
    $nom_unit=$row["Nombre"];
    $HA_unit=$row["HA"];
    $HP_unit=$row["HP"];
    $F_unit=$row["F"];
    $R_unit=$row["R"];
    $A_unit=$row["A"];
    $SV_unit=$row["SV"];
    $img=$row["Imagen"];
    }
$SQL4="SELECT * FROM UNIDAD WHERE cod=$cod_def";
    $RS4=mysqli_query($con, $SQL4);
    while($row=mysqli_fetch_assoc($RS4)){
        $cod_unit2=$row['cod'];
    $nom_unit2=$row["Nombre"];
    $HA_unit2=$row["HA"];
    $HP_unit2=$row["HP"];
    $F_unit2=$row["F"];
    $R_unit2=$row["R"];
    $A_unit2=$row["A"];
    $SV_unit2=$row["SV"];
    $img2=$row["Imagen"];
    }
    
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/portfolio.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="justify-content-center h-100">
                    <h5>
                    <table width=100%>
                    <tr>
                    <td></td><td>Habilidad de Armas</td><td>Habilidad de Proyectiles</td><td>Fuerza</td><td>Resistencia</td>
                    </tr>
                    <tr>
                    <td>Atacante</td><td><center><?php echo "$HA_unit"; ?></center></td><td><center><?php echo "$HP_unit"; ?></center></td><td><center><?php echo "$F_unit"; ?></center></td><td><center><?php echo "$R_unit"; ?></center></td>
                    </tr>
                    </tr>
                    <td>Defensor</td><td><center><?php echo "$HA_unit2"; ?></center></td><td><center><?php echo "$HP_unit2"; ?></center></td><td><center><?php echo "$F_unit2"; ?></center></td><td><center><?php echo "$R_unit2"; ?></center></td>
                    </tr>
                    </table>
                    </h5>
                    <div class="h-100">
                    <table width=100%>
                    <tr>
                        <td><center><h3>Atacante</h3></center></td>
                        <td><center><h3>Defensor</h3></center></td>
                    </tr>
                    <tr>
                    <td colspan=2>
                    <center><h3>Combate cuerpo a cuerpo(Impactar)</h3></center><br>
                    </td>
                    </tr>
                    <?php
                    if($HA_unit==($HA_unit2+1)){
                        echo "<tr>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif($HA_unit==($HA_unit2+2)){
                        echo "<tr>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif($HA_unit==($HA_unit2+3)){
                        echo "<tr>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "<td><center><h3>5+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif($HA_unit==($HA_unit2+4)){
                        echo "<tr>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "<td><center><h3>5+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif($HA_unit==($HA_unit2+5)){
                        echo "<tr>";
                        echo "<td><center><h3>2+<h3></center></td>";
                        echo "<td><center><h3>6+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif($HA_unit>($HA_unit2+5)){
                        echo "<tr>";
                        echo "<td><center><h3>2+<h3></center></td>";
                        echo "<td><center><h3>6+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+1)==$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+2)==$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+3)==$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>5+<h3></center></td>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+4)==$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>5+<h3></center></td>";
                        echo "<td><center><h3>3+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+5)==$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>6+<h3></center></td>";
                        echo "<td><center><h3>2+<h3></center></td>";
                        echo "</tr>";
                    }
                    elseif(($HA_unit+5)<$HA_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>6+<h3></center></td>";
                        echo "<td><center><h3>2+<h3></center></td>";
                        echo "</tr>";
                    }
                    else{
                        echo "<tr>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "<td><center><h3>4+<h3></center></td>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                    <td colspan=2>
                    <center><h3>Combate a Cuerpo a Cuerpo (Herir)</h3></center><br>
                    </td>
                    </tr>
                    <?php
                    if($F_unit==($R_unit2+1)){
                        echo "<tr>";
                        echo "<td><center><h3>3+<h3></center></td>";
                    }
                    elseif($F_unit>=($R_unit2+2)){
                        echo "<tr>";
                        echo "<td><center><h3>2+<h3></center></td>";
                    }
                    elseif(($F_unit+1)==$R_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>5+<h3></center></td>";
                    }
                    elseif(($F_unit+2)==$R_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>6+<h3></center></td>";
                    }
                    elseif(($F_unit+2)<$R_unit2){
                        echo "<tr>";
                        echo "<td><center><h3>-<h3></center></td>";
                    }
                    else{
                        echo "<tr>";
                        echo "<td><center><h3>4+<h3></center></td>";
                    }
                    if($F_unit2==($R_unit+1)){
                        echo "<td><center><h3>3+<h3></center></td>";
                    }
                    elseif($F_unit2>=($R_unit+2)){
                        echo "<td><center><h3>2+<h3></center></td>";
                    }
                    elseif(($F_unit2+1)==$R_unit){
                        echo "<td><center><h3>5+<h3></center></td>";
                    }
                    elseif(($F_unit2+2)==$R_unit){
                        echo "<td><center><h3>6+<h3></center></td>";
                    }
                    else{
                        echo "<td><center><h3>4+<h3></center></td>";
                    }
                    ?>
                    </tr>
                    <td colspan=2>
                    <center><h3>Salvación por armadura</h3></center><br>
                    </td>
                    </tr>
                    <td><h3><center><?php echo "$SV_unit";?></center></h3></td>
                    <td><h3><center><?php echo "$SV_unit2";?></center></h3></td>
                    </tr>
                        <tr>
                            <td>
                                <center><img src='<?php echo "$img"?>' width='50%' height='50%'></center>
                            </td>
                            <td>
                            <center><img src='<?php echo "$img2"?>' width='50%' height='50%'></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 <a href="./detalle.php?cod=<?php echo "$cod_unit";?>"><h4><center><?php echo "$nom_unit"; ?></center></h4></a>
                            </td>
                            <td>
                                 <a href="./detalle.php?cod=<?php echo "$cod_unit2";?>"><h4><center><?php echo "$nom_unit2"; ?></center></h4></a>
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
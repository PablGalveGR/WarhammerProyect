<?php
include ("con.php");
session_start();
if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=="SI"){
    include ("cabecera_log.php");
    $cod_usu=1;
}
   elseif(isset($_SESSION["autentificado2"]) && $_SESSION["autentificado2"]=="SI"){
      include ("cabecera_admin.php"); 
   }
else{
    include ("cabecera.php");
}
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-1000">
                <div class="row h-1000 align-items-center justify-content-center">
                    <div class="h-1000">
<table bgcolor= "white">
    <?php 
    if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"]=="SI"){
    echo"<form action='insert_ejer.php' method='POST'>";
    echo"<input type='hidden' name='cod_usu' value=$cod_usu>";
    }else{
    echo"<form action='insert_ejer.php' method='POST'>";
    }
    ?>
    <tr>
    <td>
    Nombre del ejercito
    </td>
    <td>
        <input type="text" name="nom_ejer">
    </td>
    <td>
    Raza
    </td>
    <td>
    <select name="Raza">
    <?php
    $SQL2="SELECT * FROM RAZA"; 
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $des_raza=$row['Nombre'];
        $cod_raza=$row['cod'];
?>
    <option value="<?php echo $cod_raza;?>"><?php echo $des_raza;?></option>
    <?php
    }
    ?>
    </select>
    <td>
    Faccion
    </td>
    <td>
    <select name="Faccion">
    <?php
    $SQL2="SELECT * FROM FACCION_RAZA"; 
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $des_fac=$row['Nombre'];
        $cod_fac=$row['cod'];
?>
    <option value="<?php echo $cod_fac;?>"><?php echo $des_fac;?></option>
    <?php
    }
    ?>
    </select>
    </td>
    <td>
    <input type="submit" name="send" value="Crear">
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
    include ("footer.php");
    mysqli_close($con);
  ?>

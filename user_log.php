<?php
include("cabecera.php");
?>
<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/Iniciar.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="h-100">
    
    <form action="user_check.php" method="POST">
    <h2>Usuarios Base</h2>
    <br>
    <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
    <tr>
      <td colspan="2" align="center"
<?php if (isset($_GET["error"]) && $_GET["error"]=="data"){?>
bgcolor=red><span style="color:#fffff"><b>Int&eacute;ntalo otra vez!! </b></span>
          <?php }else{?>
        bordercolor="red"><span><font><h3>Introduce tus datos</h3></font></span>
      <?php }?></td>
    </tr>
    <tr>
      <td><h3>Usuario:</h3></td>
      <td><input name="usuario" type="Text" maxlength="50"></td>
    </tr>
    <tr>
      <td><h3>Contraseña:</h3></td>
      <td><input name="pass" type="password"  maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Submit" type="Submit" value="Enviar"></td>
    </tr>
  </table>
  </form>
  <h2>Usuarios Administradores</h2>
  <br>
  <form action="check.php" method="POST">
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
    <tr>
      <td colspan="2" align="center"
  <?php if (isset($_GET["error"]) && $_GET["error"]=="data"){?>
bgcolor=red><span style="color:#fffff"><b>Int&eacute;ntalo otra vez!! </b></span>
          <?php }else{?>
        bordercolor="red"><span><font><h3>Introduce tus datos</h3></font></span>
      <?php }?></td>
    </tr>
    <tr>
      <td ><h3>Usuario:</h3></td>
      <td><input name="usuario2" type="Text" maxlength="50"></td>
    </tr>
    <tr>
      <td><h3>Contraseña:</h3></td>
      <td><input name="pass2" type="password"  maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Submit" type="Submit" value="Enviar"></td>
    </tr>
  </table>
  </form>
  </div>
                </div>
            </div>
        </div>
<?php
include("footer.php");
?>
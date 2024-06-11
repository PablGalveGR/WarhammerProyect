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
<form action="check.php" method="POST">
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0" bgcolor="white">
    <tr>
      <td colspan="2" align="center"
<?php if (isset($_GET["error"]) && $_GET["error"]=="data"){?>
bgcolor=red><span style="color:#fffff"><b>Int&eacute;ntalo otra vez!! </b></span>
          <?php }else{?>
      bgcolor=#666666 bordercolor="red"><span><font color=black>Introduce tus datos</font></span>
      <?php }?></td>
    </tr>
    <tr>
      <td align="right" >Usr:</td>
      <td><input name="usuario" type="Text" maxlength="50"></td>
    </tr>
    <tr>
      <td align="right">Pwd:</td>
      <td><input name="pass" type="password"  maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Submit" type="Submit" value="Enviar"></td>
    </tr>
  </table>
  </div>
                </div>
            </div>
        </div>
<?php
include("footer.php");
?>
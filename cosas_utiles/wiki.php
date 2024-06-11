<?php
include ('cabecera.php');
include ('con.php');
?>
    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/portfolio.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Bienvenido a nuestra wiki</h2>
                        <p>Aqui podras buscar entre todas las figuras de nuestra paguina web y ver sus detalles</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Menu -->
        <div class="sonar-portfolio-menu">
            <div class="text-center portfolio-menu">
            <form action="#" method="POST">
                <input class="btn" type="submit" name="all_send" value="Todo">
                <input class="btn" type="submit" name="Ork_send" value="Orkos">
                <input class="btn" type="submit" name="Mar_send" value="Space Marines">
            </form>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->
    <!-- ****** Gallery Area Start ****** -->
    <section class="sonar-projects-area" id="projects">
        <div class="container-fluid">
            <div class="row sonar-portfolio">
                <font color="black">
<?php
if(isset($_POST["all_send"])){
        $SQL="SELECT * FROM UNIDAD;";        
        $RS=mysqli_query($con,$SQL);
        while($row=mysqli_fetch_assoc($RS)){
            $nom_unit=$row["Nombre"];
            $img_unit=$row['Imagen'];
            $cod_unit=$row['cod'];
    ?>
                <!-- Boyz -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle.php?cod=$cod_unit"?>"><img src="<?php echo $img_unit?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_unit"?></h4>
                    </div>
                </div>
    <?php
    }
    $SQL2="SELECT * FROM VEHICULOS;";
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $nom_ve=$row["Nombre"];
        $img_ve=$row['Imagen'];
        $cod_ve=$row['cod'];
    ?>
    <!-- Boyz -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle_Tank.php?cod=$cod_ve"?>"><img src="<?php echo $img_ve?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_ve"?></h4>
                    </div>
                </div>
    <?php
    }
    $SQL2="SELECT * FROM ANDADORES;";
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $nom_an=$row["Nombre"];
        $img_an=$row['Imagen'];
        $cod_an=$row['cod'];
    ?>
    <!-- Boyz -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle_An.php?cod=$cod_an"?>"><img src="<?php echo $img_an?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_an"?></h4>
                    </div>
                </div>
    <?php
    }
}
elseif(isset($_POST["Ork_send"])){
        $SQL="SELECT * FROM UNIDAD WHERE RAZA=1;";
        $RS=mysqli_query($con,$SQL);
        while($row=mysqli_fetch_assoc($RS)){
            $nom_unit=$row["Nombre"];
            $img_unit=$row['Imagen'];
            $cod_unit=$row['cod'];
    ?>
                <!-- Boyz -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle.php?cod=$cod_unit"?>"><img src="<?php echo $img_unit?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_unit"?></h4>
                    </div>
                </div>
<?php
    }
    $SQL2="SELECT * FROM VEHICULOS WHERE RAZA=1;";
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $nom_ve=$row["Nombre"];
        $img_ve=$row['Imagen'];
        $cod_ve=$row['cod'];
    ?>
    <!-- Boyz -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle_Tank.php?cod=$cod_ve"?>"><img src="<?php echo $img_ve?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_ve"?></h4>
                    </div>
                </div>
    <?php
    }
    $SQL2="SELECT * FROM ANDADORES WHERE RAZA=1;";
    $RS2=mysqli_query($con,$SQL2);
    while($row=mysqli_fetch_assoc($RS2)){
        $nom_an=$row["Nombre"];
        $img_an=$row['Imagen'];
        $cod_an=$row['cod'];
    ?>
    <!-- Boyz -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                    <a class="gallery-img_wiki" href="<?php echo "detalle_An.php?cod=$cod_an"?>"><img src="<?php echo $img_an?>" alt=""></a>
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?php echo "$nom_an"?></h4>
                    </div>
                </div>
    <?php
    }
}
elseif(isset($_POST["Mar_send"])){
    $SQL="SELECT * FROM UNIDAD WHERE RAZA=2;";
    $RS=mysqli_query($con,$SQL);
    while($row=mysqli_fetch_assoc($RS)){
        $nom_unit=$row["Nombre"];
        $img_unit=$row['Imagen'];
        $cod_unit=$row['cod'];
?>
            <!-- Boyz -->
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img_wiki" href="<?php echo "detalle.php?cod=$cod_unit"?>"><img src="<?php echo $img_unit?>" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><?php echo "$nom_unit"?></h4>
                </div>
            </div>
<?php
}
$SQL2="SELECT * FROM VEHICULOS WHERE RAZA=2;";
$RS2=mysqli_query($con,$SQL2);
while($row=mysqli_fetch_assoc($RS2)){
    $nom_ve=$row["Nombre"];
    $img_ve=$row['Imagen'];
    $cod_ve=$row['cod'];
?>
<!-- Boyz -->
<div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img_wiki" href="<?php echo "detalle_Tank.php?cod=$cod_ve"?>"><img src="<?php echo $img_ve?>" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><?php echo "$nom_ve"?></h4>
                </div>
            </div>
<?php
}
$SQL2="SELECT * FROM ANDADORES WHERE RAZA=2;";
$RS2=mysqli_query($con,$SQL2);
while($row=mysqli_fetch_assoc($RS2)){
    $nom_an=$row["Nombre"];
    $img_an=$row['Imagen'];
    $cod_an=$row['cod'];
?>
<!-- Boyz -->
<div class="col-12 col-sm-6 col-lg-3 single_gallery_item orkos studio wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img_wiki" href="<?php echo "detalle_An.php?cod=$cod_an"?>"><img src="<?php echo $img_an?>" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><?php echo "$nom_an"?></h4>
                </div>
            </div>
<?php
}
}

    ?>
                    </font>
    </section>
<?php
include ("footer.php");
?>
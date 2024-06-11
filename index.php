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
?>
    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/Iniciar.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <a href="user_log.php"><h2>Iniciar Session</h2></a>
                                <p>Aqui podras iniciar sesion para guardar tus ejercitos favoritos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/Ejercito.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <a href="Crear_ejer.php"><h2>Creador de ejercitos</h2></a>
                                <p>Aqui podras crear el ejercito que quieras escogiendo las unidades y calculando el coste del ejercito</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/Wiki.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <a href="wiki.php"><h2>Wiki de figuras</h2></a>
                                <p>Aqui podras buscar la figura que quieras y ver todas sus caracteristicas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/Batalla.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <a href="combates.php"><h2>Calculador de Combates</h2></a>
                                <p>Aqui podras calcular la cantidad de datos y el resultado de esto que debes sacar para vencer en una batalla</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->

    <!-- ***** Call to Action Area End ***** -->
<?php
include "footer.php";
?>
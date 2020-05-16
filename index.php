<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php
    require_once('layouts/head.php');
    ?>

    <title>inicio</title>
  </head>
  <body>

  <!-- CARRUSEL -->
  <div class="container carr">
         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
           <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="img/carrusel/1.png" class="d-block w-100 carrusel" alt="...">
             <div class="carousel-caption d-none d-md-block">
               <h5>Equipo medico de calid</h5>
               <p>Todo tipo de soluciones para cualquier problema</p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="img/carrusel/2.png" class="d-block w-100 carrusel" alt="...">
             <div class="carousel-caption d-none d-md-block">
               <h5>Nuestro equipo medico es de primera calida</h5>
               <p>Contamos con cetificacion de calidad</p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="img/carrusel/3.png" class="d-block w-100 carrusel" alt="...">
             <div class="carousel-caption d-none d-md-block">
               <h5>Nosotros nos preocupamos por brindar equipos de primera calidad</h5>
               <p>La mejor calidad del mercado con todos los requerimientos del mercado</p>
             </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
        </div>
</div>
  <!-- FIN CARRUSEL -->

<div class="contenedor">
    <div class="item1 ">
        <div class="row">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Efectos del covid</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn botton" data-toggle="modal" data-target="#exampleModalScrollable">Ver mas</a>
              </div>
            </div>

            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Efectos del covid</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn botton">Ver mas</a>
              </div>
            </div>

            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Efectos del covid</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn botton">Ver mas</a>
              </div>
            </div>

            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Efectos del covid</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn botton">Ver mas</a>
              </div>
            </div>
        </div>
    </div>
    <div class="item2 ">PRODUCTOS </div>

</div>

<?php
require_once('complementos/modal.php');
 require_once('layouts/footer.php');
?>
  </body>
</html>
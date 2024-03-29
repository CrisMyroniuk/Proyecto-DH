<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DIGITAL SPORT</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Monoton&display=swap" rel="stylesheet">



  </head>
  <body>




      <?php //incluyo el header:
      session_start();
      require_once('header.php');  ?>

      <div id="container">

        <div id="content">

          <div id="section">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div  class="carousel-item active" data-interval="10000">
                  <img class="banner" src="img/Portada1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img class="banner" src="img/Portada2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img class="banner" src="img/Portada3.jpg" class="d-block w-100" alt="">


                </div>
              </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

          <div id="main">
            <h1>PRODUCTOS</h1>
            <div class="row">

              <div class="col-xs-12 col-md-6 col-lg-4">
              <a href="remeras.php"><img class="foto zoom" src="img/imgInicio/Remeras.jpg" alt=""></a>
              <a href="remeras.php">
                <div class="indicador">
                  <h3>Remeras</h3>
                </div>
              </a>

              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="pantalon.php"><img class="foto zoom" src="img/imgInicio/Pantalon.jpg" alt=""></a>
                <a href="pantalon.php">
                  <div class="indicador">
                    <h3>Shorts</h3>
                  </div>
                </a>

              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                 <a href="buzos.php"><img class="foto zoom" src="img/imgInicio/Campera.JPG" alt=""></a>
                 <a href="buzos.php">
                   <div class="indicador">
                     <h3>Buzos</h3>
                   </div>
                 </a>

              </div>
              <!--<div class="dividor cols-xs-12 col-lg-12">

              </div>-->
              <div class="col-xs-12 col-md-6 col-lg-4">

                 <a href="musculosas.php"><img class="foto zoom" src="img/imgInicio/Musculosa.jpg" alt=""></a>
                 <a href="musculosas.php">
                   <div class="indicador">
                     <h3>Musculosas</h3>
                   </div>
                 </a>

              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                 <a href="zapatillas.php"><img class="foto zoom" src="img/imgInicio/Zapatillas.jpg" alt=""></a>
                 <a href="zapatillas.php">
                   <div class="indicador">
                     <h3>Zapatillas</h3>
                   </div>
                 </a>

              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">

                 <a href="accesorios.php"><img class="foto zoom" src="img/imgInicio/Accesorios.JPG" alt=""></a>
                 <a href="accesorios.php">
                   <div class="indicador">
                     <h3>Accesorios</h3>
                   </div>
                 </a>



              </div>

              </div>

            </div>
          </div>

            <?php
            //incluyo el footer:
            require_once('footer.php'); ?>

        </div>










      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

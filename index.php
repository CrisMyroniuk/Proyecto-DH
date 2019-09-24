
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MI TIENDA</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Michroma&display=swap" rel="stylesheet">




  </head>
  <body>
      <div class="contenedor">
        <header>
        <input type="checkbox" id="menu">
        <label for="menu"><img src="img/menu.svg" alt=""></label>
        <a class="logo" href="index.php"><h1>DIGITAL SPORT</h1></a>

       <nav class="menu">
         <ul>
           <li><a href="remeras.html">Remeras</a></li>
           <li><a href="pantalon.html">Pantalones</a></li>
           <li><a href="zapatillas.html">Zapatillas</a></li>
           <li><a href="buzos.html">Buzos</a></li>
           <li><a href="contacto.html">CONTACTO</a></li>

         </ul>

       </nav>

       <button type="button" name="button"> <a href="login.html"> <img  src="img/logearse.svg" alt=""> </a> </button>
       <button type="button" name="button"> <a href="perfil.html"> <img src="img/login.svg" alt=""> </a> </button>
       <button type="button" name="button"> <a href="miscompras.html"> <img src="img/carrito.svg" alt=""> </a> </button>

      </header>
      </div>

      <div id="container">
        <div id="content">
          <div id="section">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
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

              <div class="col-xs-12 col-md-4 col-lg-4">
              <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Remeras.jpg" alt=""></a>
              <div class="indicador">
                <h3 >Remeras</h3>
              </div>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Pantalon.jpg" alt=""></a>
                <div class="indicador">
                  <h3 >Shorts</h3>
                </div>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                 <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Campera.JPG" alt=""></a>
                 <div class="indicador">
                   <h3 >Camperas</h3>
                 </div>
              </div>
              <div class="dividor cols-xs-12 col-md-12 col-lg-12">

              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                 <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Musculosa.jpg" alt=""></a>
                 <div class="indicador">
                   <h3 >Musculosas</h3>
                 </div>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                 <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Zapatillas.jpg" alt=""></a>
                 <div class="indicador">
                   <h3 >Zapatillas</h3>
                 </div>
              </div>
              <div class="col-xs-12 col-md-4 col-lg-4">
                 <a href="producto.html"><img class="foto" class="zoom" src="img/imgInicio/Accesorios.JPG" alt=""></a>
                 <div class="indicador">
                   <h3 >Accesorios</h3>
                 </div>


              </div>

              </div>

            </div>
          </div>
        </div>



      </div>
      <?php require_once('footer.html'); ?>








      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

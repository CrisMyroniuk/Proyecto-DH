<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DIGITAL SPORT</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/productos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php //incluyo el header:
    session_start();
    require_once('header.php');  ?>


    <div id="main">
      <h1>CALZADO</h1>
      <div class="row">

      <div class="col-xs-12 col-md-6 col-lg-4">
      <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
      <div class="titulo-ropa">
        <span>Zapatillas Nike Running</span>
      </div>
      <div class="precio-ropa">
        <span>$5500</span>
     </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
        <div class="titulo-ropa">
          <span>Zapatilla UnderArmour Training</span>
        </div>
        <div class="precio-ropa">
          <span>$4500</span>
       </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
        <div class="titulo-ropa">
          <span>Zapatillas Nike Running</span>
        </div>
        <div class="precio-ropa">
          <span>$5500</span>
       </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
         <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
         <div class="titulo-ropa">
           <span>Zapatilla UnderArmour Training</span>
         </div>
         <div class="precio-ropa">
           <span>$4500</span>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
         <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
         <div class="titulo-ropa">
           <span>Zapatillas Nike Running</span>
         </div>
         <div class="precio-ropa">
           <span>$5500</span>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
      <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
      <div class="titulo-ropa">
        <span>Zapatilla UnderArmour Training</span>
      </div>
      <div class="precio-ropa">
        <span>$4500</span>
     </div>
      </div>

      </div>

    </div>

    <?php require_once('footer.php'); ?>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

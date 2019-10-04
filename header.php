<!DOCTYPE html>
<?php

  if($_SESSION){
    $selogeo=$_SESSION['selogeo'];

  }
  else{
    $selogeo="";
  }?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Michroma&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="contenedor">
      <header>
      <input type="checkbox" id="menu">
      <label for="menu"><img src="img/menu.svg" alt=""></label>
      <a class="logo" href="index.php"><h1>DIGITAL SPORT></h1></a>

     <nav class="menu">
       <ul>
         <li><a href="remeras.php">Remeras</a></li>
         <li><a href="pantalon.php">Pantalones</a></li>
         <li><a href="zapatillas.php">Zapatillas</a></li>
         <li><a href="buzos.php">Buzos</a></li>
         <li><a href="musculosas.php">Musculosas</a></li>
         <li><a href="accesorios.php">Accesorios</a></li>
         <hr>
         <li><a href="contacto.php">CONTACTO</a></li>
         <li><a href="faqs.php">FAQS</a></li>
         <?php if($selogeo!=true){ ?>
         <li><a href="registro.php">REGISTRO</a></li>
         <li><a href="login.php">LOGIN</a></li>
       <?php } ?>
       <?php if($selogeo==true){ ?>
         <li><a href="perfil.php">MI PERFIL</a></li>
         <li><a href="logout.php">CERRAR SESIÓN</a></li>
       <?php } ?>

       </ul>

     </nav>

      <?php if($selogeo!=true){ ?> <button type="button" name="button"> <a href="login.php"> <img src="img/logearse.svg" alt=""> </a> </button>
      <?php } ?>
    <?php if($selogeo==true){ ?>
      <button type="button" name="button"> <a href="perfil.php"> <img src="img/login.svg" alt=""></a> </button>
      <button type="button" name="button"> <a href="miscompras.php"> <img src="img/carrito.svg" alt=""> </a> </button>
    <?php } ?>



   </header>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>

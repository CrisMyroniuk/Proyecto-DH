<?php


include_once('clases/autoload.php');

if($_POST){

  $validador = new validadorLogin($_POST['email'], $_POST['password']);
  $errores = $validador->validar();


  if(empty($errores))
  {
    //si errores está vacio mando a autenticar al Usuario

    $usuario = baseDeDatos::buscarPorEmail($_POST['email']);

    $autenticar = new autenticador;

    $autenticar->logear($usuario);


    header('location: perfil.php');

  }
  else{
    //informo los errores
    foreach($errores as $error){
      echo $error;
    }
  }
}

 ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">


    <title>Formulario Registro</title>
  </head>
  <body>


    <title>Login</title>
  </head>
  <body>
    <?php //incluyo el header:
    require_once('header.php');  ?>

    <div class="container">
      <h4>Iniciar Sesión</h4>

      <form class="" action="login.php" method="post" enctype="multipart/form-data">
      <input class="controles" type="email" name="email" value="" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">
      <input type="checkbox" name="mantenerme" value="">
      <label for="">Mantenerme logueado</label>
      <button class="" type="submit" class="btn btn-secondary btn-sm">Login</button>
      </form>
      <p>No tienes cuenta? <a class="link" href="registro.php">Registrate</a></a> </p>



    </div>



    <?php
    //incluyo el footer:
    require_once('footer.php'); ?>














    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

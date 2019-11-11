<?php

include_once('clases/autoload.php');

$errores = [
  'nombres' => '',
  'email' => '',
  'apellido' => '',
  'password' => '',
];

$nombre = '';
$apellido = '';
$email = '';

$registroCorrecto = 0;

if($_POST){

$validador = new validadorRegistro($_POST['email'], $_POST['password'], $_POST['confirmar']);
$errores = $validador->validar();

$nombre = $_POST['nombres'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];




 if($errores['email'] == '' && $errores['password'] ==  ''){
  $usuario = new usuario($_POST['nombres'], $_POST['apellido'], $_POST['email'], $_POST['password']);
  $carrito = new carrito($usuario);

  baseDeDatos::guardarUsuario($usuario);
  $registroCorrecto = 1;
  //header('location: login.php');
 }


}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
    <title>DIGITAL SPORT</title>
  </head>
  <body>

    <?php require_once('header.php'); ?>

    <div class="container">
      <h4>Formulario de Registro</h4>

      <form class="" action="registro.php" method="post" enctype="multipart/form-data">
        <div class="error"></div>
        <input class="controles" type="text" name="nombres" value="<?php echo $nombre; ?>" placeholder="Ingrese su nombre">
        <div class="error"></div>
        <input class="controles" type="text" name="apellido" value="<?php echo $apellido ?>" placeholder="Ingrese su apellido" >
        <div class="error"><?php echo $errores['email']; ?></div>
        <input class="controles" type="email" name="email" value="<?php echo $email ?>" placeholder="Ingrese su correo electronico">
        <div class="error"><?php  echo $errores['password']; ?></div>
        <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">

        <input class="controles" type="password" name="confirmar" value="" placeholder="Vuelva a ingresar su contraseña">
        <div class="form-group">
          <label for="avatar">Subir avatar</label>
          <input type="file"  id="avatar" name="avatar">
        </div>
        <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
        <p>Ya estás registrado? <a class="link" href="login.php">Iniciar sesión</a></a> </p>



      </form>
      <?php
       if($registroCorrecto==1){?>
        <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">USUARIO REGISTRADO!</h4>
      <p>Bienvenido <?php echo $usuario->getNombre(); ?>, con email <?php echo $usuario->getEmail(); ?> </p>
      <hr>
      <p class="mb-0">Gracias por confiar en nosotros.</p>
    </div>

    <?php  } ?>

    </div>

    <?php require_once('footer.php'); ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

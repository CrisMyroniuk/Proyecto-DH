<?php
require_once('Funciones/FunRegistro.php');
crearUsuario();

$nombre="";
$email="";
$apellido="";
if($_POST) {
  $errorNombre="";
  $errorMail="";
  $errorContraseña;
$nombre=$_POST['nombres'];
  $apellido=$_POST['apellido'];
  $email=$_POST['correo'];
  $password=$_POST['pass'];
  $confirmar=$_POST['confirmacion'];



  if ($nombre=="") {
    echo $errorNombre="El nombre no puede estar vacio";
} if ($password=="") {
echo $errorContraseña= "La contraseña no puede estar vacia";
}else{
  if (strlen($password)<6) {
    echo $errorContraseña="La contraseña debe tener al menos 6 caracteres";
  }
}
if ($apellido=="") {
  echo $errorNombre="El apellido no puede estar vacio";
} if ($email=="") {
    echo $errorMail="Ingresa el email";
}else {
  if (!filter_Var($email,FILTER_VALIDATE_EMAIL)) {
      echo $errorMail="El email no es valido";
  }
}if ($password!==$confirmar) {
echo $errorContraseña="Las contraseñas no coinciden";
}
if (empty($errorMail)&&empty($errorNombre)&& empty($errorContraseña)) {
header("location:login.php");
}
}






 ?>
?>
<!DOCTYPE html>
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


    <div class="container">
      <h4>Formulario de Registro</h4>
      <form class="" action="registro.php" method="post" enctype="multipart/form-data">
        <input class="controles" type="text" name="nombres" value="<?php echo $nombre ?>" placeholder="Ingrese su nombre">

        <input class="controles" type="text" name="apellido" value="<?php echo $apellido ?>" placeholder="Ingrese su apellido">
        <input class="controles" type="email" name="correo" value="<?php echo $email ?>" placeholder="Ingrese su correo electronico">
        <input class="controles" type="password" name="pass" value="" placeholder="Ingrese su contraseña">
        <input class="controles" type="password" name="confirmacion" value="" placeholder="Vuelva a ingresar su contraseña">
        <p>Estoy de acuerdo con <a href="#">Términos y Condiciones</a>  </p>
        <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
        <p>¿Ya estás registrado? <a class="link" href="login.html">Iniciar sesión</a></a> </p>
      </form>







    </div>













    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

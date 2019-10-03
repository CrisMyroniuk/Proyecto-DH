<<<<<<< HEAD

<?php

require_once('Funciones/FunRegistro.php');
crearUsuario();
require_once('./Funciones/validacionRegistro.php');
require_once('./Funciones/autentificador.php');


$errorMail="";
$errorContraseña="";
  $email = '';



  if ($_POST) {
      $email = $_POST['correo'];
      $password = $_POST['pass'];

      if ($email == '') {
        echo  $errorMail = 'Ingresa tu email';
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errorMail = 'El email es invalido';
      }

      if ($password == '') {
          $errorContraseña = 'Ingresa tu password';
      }
      if (empty($errorMail) && empty($errorContraseña)) {
        //levanto json
          $archivo = file_get_contents('usuarios.json');
          //transformo
          $usuarios = json_decode($archivo, true);
          //recorro array de usuarios
          foreach ($usuarios as $usuario) {
              if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {
                  $_SESSION['email'] = $usuario['email'];


                  if(isset($_POST['mantenerme'])) {
                      setcookie('email', $email, time() + 60*60*24*30);
                  }



                    //redirijo a index
                  header('location:index.php');
              }
          }
        echo  $errorMail = 'Usuario o clave invalidos';
      }

  }




 ?>
 <!DOCTYPE html>
=======
<!DOCTYPE html>
<?php
session_start();

  if($_POST){
    $errores=[];
    $usuario=[];
    $seLogeo=false;
    if($_POST['email']!=''){
      $email=$_POST['email'];
    }
    else{
      $errores[]="Ingrese email";
    }
    if($_POST['password']!=''){
      $password=$_POST['password'];
    }
    else{
      $errores[]="Ingrese su contraseña";
    }
    if(empty($errores)){
    $usuariosjson=FILE_GET_CONTENTS('usuario.json');
    $datosusuarios=json_decode($usuariosjson,true);

    foreach ($datosusuarios as $usuarios) {
      if($usuarios['email']==$email && password_verify($password, $usuarios['password'])){
        $_SESSION['email']=$email;
        $_SESSION['nombres']=$usuarios['nombres'];
        $seLogeo=true;
      }
  }
}
 if($seLogeo==false){
   $_SESSION['email']='';
   $_SESSION['nombres']='';
 }
  if(!empty($_POST['mantenerme']) && $seLogeo){
    setcookie('email', $email, time() + 60*60*24*30);
    header('location:perfil.php');
  }
  else{
    if($seLogeo){
      header('location:perfil.php');
    }
  }
}
 ?>

>>>>>>> 65479a2d7e8b5e2c95369a7a1b659c992d8c156d
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">

<<<<<<< HEAD
    <title>Formulario Registro</title>
  </head>
  <body>


=======
    <title>Login</title>
  </head>
  <body>

>>>>>>> 65479a2d7e8b5e2c95369a7a1b659c992d8c156d
    <title>DIGITAL SPORT</title>
  </head>
  <body>

    <?php //incluyo el header:
    require_once('header.php');  ?>
<<<<<<< HEAD
  <?php
    echo $errorMail;
      echo '<br>' . $errorContraseña;
   ?>
    <div class="container" enctype="multipart/form-data">
      <h4>Iniciar Sesión</h4>
      <input class="controles" type="email" name="correo" value="<?php echo $email; ?>" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="contraseña" value="" placeholder="Ingrese su contraseña">
      <div class="">
        <div class="form-group form-check">
          <input type="checkbox" name="mantenerme" class="form-check-input" id="mantenerme" value="1">
          <label class="form-check-label" for="mantenerme">Dejarme Conectado</label>
          </div>
      <button class="boton" type="submit" class="btn btn-secondary btn-sm">Login</a></button>
      <p>¿No tienes cuenta? <a class="link" href="registro.php">Registrate</a></a> </p>
=======


    <div class="container">
      <h4>Iniciar Sesión</h4>
      <?php
      if($_POST){
      if(!$seLogeo && empty($errores)){
      echo "email o contraseña invalida";
    }
    else{
      foreach($errores as $error){
        echo $error;
        echo '<br>';
      }
  }
  echo '<br>';
}
       ?>
      <form class="" action="login.php" method="post" enctype="multipart/form-data">
      <input class="controles" type="email" name="email" value="" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">
      <input type="checkbox" name="mantenerme" value="">
      <label for="">Mantenerme logueado</label>
      <button class="" type="submit" class="btn btn-secondary btn-sm">Login</button>
      </form>
      <p>No tienes cuenta? <a class="link" href="registro.php">Registrate</a></a> </p>

>>>>>>> 65479a2d7e8b5e2c95369a7a1b659c992d8c156d







    </div>


    </div>

    <?php
    //incluyo el footer:
<<<<<<< HEAD
    require_once('footer.html'); ?>
=======
    require_once('footer.php'); ?>
>>>>>>> 65479a2d7e8b5e2c95369a7a1b659c992d8c156d













    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

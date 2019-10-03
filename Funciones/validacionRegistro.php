<?php
$errorMail="";
$errorNombre="";
$errorContraseña="";
$errorconfirmacion="";
$errorApellido="";
$nombre="";
$email="";
$apellido="";
if($_POST) {

$nombre=$_POST['nombres'];
  $apellido=$_POST['apellido'];
  $email=$_POST['correo'];
  $password=$_POST['pass'];
  $confirmar=$_POST['confirmacion'];



  if ($nombre=="") {
    $errorNombre="El nombre no puede estar vacio";
  }
  if ($apellido=="") {
    $errorApellido="El apellido no puede estar vacio";
  } if ($email=="") {
    $errorMail="Ingresa el email";
  }else {
  if (!filter_Var($email,FILTER_VALIDATE_EMAIL)) {
   $errorMail="El email no es valido";
    }
  }
  if ($password=="") {
    $errorContraseña= "La contraseña no puede estar vacia";
}else{
  if (strlen($password)<6) {
     $errorContraseña="La contraseña debe tener al menos 6 caracteres";
  }
}
    if ($password!==$confirmar) {
      $errorconfirmacion="Las contraseñas no coinciden";
}
if (empty($errorMail)&&empty($errorNombre)&& empty($errorContraseña)&& empty($errorApellido)&&empty($errorconfirmacion)) {
  
header("location:login.php");
}
}

 ?>

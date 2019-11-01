<?php
session_start();
  $usuario=[
    'nombres' => '',
    'email'=> '',
    'apellido' => '',
    'password' => '',
    'confirmacion' => '',
  ];

  $errores=[
    'nombres' => '',
    'email'=> '',
    'apellido' => '',
    'password' => '',
    'confirmacion' => ''
  ];
  $errorEmail='';

 if($_POST){

     if($_POST['nombres']!=''){
       $usuario['nombres'] = $_POST['nombres'];
     }
     else{
       $errores['nombres']="El nombre no puede estar vacío";

     }
     if($_POST['apellido']!=''){
       $usuario['apellido'] = $_POST['apellido'];
     }
     else{
       $errores['apellido']="El apellido no puede estar vacío";
     }
     if($_POST['email']!=''){

       $usuario['email'] = $_POST['email'];
       //VER QUE EL EMAIL NO SE ENCUENTRE YA REGISTRADO, SINO ENVIAR OTRO ERROR "EL EMAIL YA SE ENCUENTRA REGISTRADO"

       $archivo=FILE_GET_CONTENTS('usuario.json');
       $usuarios=json_decode($archivo,true);
       foreach($usuarios as $emailRegistrado){
         if($emailRegistrado['email']==$usuario['email']){
           $errores['email']='El email ya se encuentra registrado';

         }
       }

     }
     else {
      $errores['email']="Ingrese un email";
     }
    if($_POST['password']!=''){
      $usuario['password'] = $_POST['password'];
    }
    else {
     $errores["password"]="La contraseña no puede estar vacía";
    }
    if($_POST['confirmacion']!=''){
      $usuario['confirmacion'] = $_POST['confirmacion'];
    }
    else {
      $errores["password"]= "Confirme su contraseña";
    }
    if($_POST['password'] != $_POST['confirmacion']){
      $errores["password"]="Las contraseñas no coinciden";
    }
    if($errores['nombres']==""&&$errores['apellido']==""&&$errores['email']==""&&$errores['password']==""){


     //si salio todo bien redirecciono y guardo en un json
     $hash1=password_hash($usuario['password'],PASSWORD_DEFAULT);
     $hash2=password_hash($usuario['confirmacion'],PASSWORD_DEFAULT);
     $usuario['password']=$hash1;
     $usuario['confirmacion']=$hash2;

     //Guardo en json mi usuario, lo codifico en json denuevo y lo subo:

     $usuarios[] = $usuario;

     $json=json_encode($usuarios);
     FILE_PUT_CONTENTS('usuario.json',$json);?>

    <?php /*header('location:login.php');*/
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
        <div class="error"><?php echo $errores['nombres']; ?></div>
        <input class="controles" type="text" name="nombres" value="<?php echo $usuario['nombres']; ?>" placeholder="Ingrese su nombre">
        <div class="error"><?php echo $errores['apellido']; ?></div>
        <input class="controles" type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" placeholder="Ingrese su apellido" >
        <div class="error"><?php echo $errores['email']; ?></div>
        <input class="controles" type="email" name="email" value="<?php echo $usuario['email']; ?>" placeholder="Ingrese su correo electronico">
        <div class="error"><?php echo $errores['password']; ?></div>
        <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">

        <input class="controles" type="password" name="confirmacion" value="" placeholder="Vuelva a ingresar su contraseña">

        <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
        <p>Ya estás registrado? <a class="link" href="login.php">Iniciar sesión</a></a> </p>



      </form>
      <?php
       if($usuario['nombres']!=""&&$usuario['apellido']!=""&&$usuario['email']!=""&&$usuario['password']!=""&&$usuario['confirmacion']!=""){?>
        <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">USUARIO REGISTRADO!</h4>
      <p>Bienvenido <?php echo $usuario['nombres']; ?>, con email <?php echo $usuario['email']; ?> </p>
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

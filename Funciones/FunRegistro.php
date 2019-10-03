
<<<<<<< HEAD
function crearUsuario(){
  if($_POST){
    $usuarios = [
    "nombre" => $_POST['nombres'],
    "apellido" => $_POST['apellido'],
    "email" => $_POST['correo'],
    "password" => $_POST['pass'],
    "confirPass" => $_POST['confirmacion'],
  ];
  //$encriptada=password_hash($_POST['pass'],PASSWORD_DEFAULT);
  $archivo=file_get_contents('usuarios.json');
  $usuariosJson=json_decode($archivo,true);
  $usuariosJson[] = $usuarios;

  $json=json_encode($usuariosJson,JSON_PRETTY_PRINT);
  file_put_contents('usuarios.json',$json);
  }

}
=======
>>>>>>> 65479a2d7e8b5e2c95369a7a1b659c992d8c156d

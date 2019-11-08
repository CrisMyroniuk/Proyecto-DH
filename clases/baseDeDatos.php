<?php

class baseDeDatos{

  public static function buscarPorEmail(string $email) {
  //busca por email en la BD
  try{
    $conex = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');

  } catch(PDOException $e){
      echo 'No me pude conectar a la BD<br>';
      echo $e->getMessage();
  }

  $sql = "select * from usuarios where email = '$email'";
  $consulta = $conex->prepare($sql);
  $consulta->execute();

  $objeto = $consulta->fetch();

  if($objeto){
  $nombre = $objeto['nombre'];
  $apellido = $objeto['apellido'];
  $password = $objeto['pass'];

  $usuario = new usuario($nombre, $apellido, $email, $password);

  return $usuario;
  }

  }

  public static function guardarUsuario(usuario $usuario){
  //guardo el usuario en la BD
  try{
    $conex = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');

  } catch(PDOException $e){
      echo 'No me pude conectar a la BD<br>';
      echo $e->getMessage();
  }

  $nombre = $usuario->getNombre();
  $apellido = $usuario->getApellido();
  $email = $usuario->getEmail();
  $password = $usuario->getPassword();

  $sql = "insert into usuarios values (default, '$nombre' ,'$apellido','$email','$password')";
  $sentencia = $conex->prepare($sql);
  $sentencia->execute();

  }


public static function existeEmail(string $email) {
//busca por email en la BD
try{
  $conex = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');

} catch(PDOException $e){
    echo 'No me pude conectar a la BD<br>';
    echo $e->getMessage();
}

$sql = "select * from usuarios where email = '$email'";
$consulta = $conex->prepare($sql);
$consulta->execute();
$existe = $consulta->rowCount();

if($existe == '1'){
  //si retorna false es porque ya existe usuario con ese email
  return false;
}
else{
  //si retorna true es porque no existe nadie con ese email
  return true;
}

}

}

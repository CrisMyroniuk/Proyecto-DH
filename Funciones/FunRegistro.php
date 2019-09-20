<?php

    function crearUsuario(){
  $if($_POST){
    $usuario = [
    "nombre" => $_POST['nombres']
    "apellido" => $_POST['apellido']
    "email" => $_POST['correo'],
    "password" => $_POST['contraseña'],
    "confirPass" => $_POST['confirmacion']
  ];
  $encriptada=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);
  $archivo=file_get_contents('usuarios.json');
  $usuariosJson=json_decode($archivo,true);
  array_push($usuariosJson,$usuario);

  $json=json_encode($usuariosJson);
  file_put_contents('usuarios.json',$json);
}

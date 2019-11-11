<?php

class Usuario{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $password;

//creo el constructor//

public function __construct($nombre,$apellido,$email,$password){
  $this->setNombre($nombre);
  $this->setApellido($apellido);
  $this->setEmail($email);
  $this->setPassword($password);
}

//Hago set y get//

public function setNombre($nombre){
  $this->nombre = $nombre;
}

public function getNombre(){
  return $this->nombre;
}

public function setApellido($apellido){
  $this->apellido = $apellido;
}

public function getApellido(){
  return $this->apellido;
}

public function setEmail($email){
  $this->email = $email;
}

public function getEmail(){
  return $this->email;
}

public function setPassword($password){
  $this->password = password_hash($password,PASSWORD_DEFAULT);
}

public function getPassword(){
  return $this->password;
}

}

<?php

session_start();
class autenticador {

  public function estaLogeadoElUsuario() : bool
  {
   return isset($_SESSION['email']);
  }

  public function logear(usuario $usuario)
  {
    $_SESSION['email'] = $usuario->getEmail();
    $_SESSION['nombre'] = $usuario->getNombre();
  }

  public function deslogear()
  {
    session_destroy();
  }

}

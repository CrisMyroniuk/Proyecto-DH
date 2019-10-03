<?php
    session_start();

    function elUsuarioEstaLogeado() {
        if(isset($_SESSION['correo'])) {
            return true;
        }
        return false;
    }

    function logearUsuario($email) {

    }

 ?>

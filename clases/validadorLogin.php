<?php

 class validadorLogin extends validador{
   private $email;
   private $password;

       public function __construct(string $email, string $pass)
      {
        $this->setEmail($email);
        $this->setPassword($pass);

      }
      public function setEmail(string $email)
      {
        $this->email = $email;
      }

      public function setPassword(string $password)
      {
        $this->password = $password;
      }

      public function getEmail()
      {
       return $this->email;
      }

      public function getPassword()
      {
       return $this->password;
      }




      public function validar()
      {
        $erroresLogeo = [];

        $password = $this->validarPassword($this->getPassword());

        if($password){

          $usuarioBD = baseDeDatos::buscarPorEmail($this->getEmail());
          //var_dump(password_hash($this->getPassword(), PASSWORD_DEFAULT)); exit;
          //var_dump($this->getPassword()); exit;
          //var_dump($usuarioBD); exit;
        if(!isset($usuarioBD)){
            $erroresLogeo['email'] = "Email o contraseña invalidos";
          }

        else {
          // var_dump(password_verify($this->getPassword(), $usuarioBD->getPassword())); exit; //me tira false cuando deberia darme true
          $hash = $usuarioBD->getPassword();
          var_dump(password_verify($this->getPassword(), $hash));
          if(!password_verify($this->getPassword(), $hash) ){
          $erroresLogeo['email'] = 'Usuario o clave invalidos';

             }


           }
      }

      else{
        $erroresLogeo['password'] = "contraseña invalida";
      }



      return $erroresLogeo;
      }
}

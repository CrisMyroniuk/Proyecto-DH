<?php

 class validadorRegistro extends validador{
   private $email;
   private $password;
   private $confirmar;

   public function __construct(string $email, string $password, string $confirmar){
     $this->email = $email;
     $this->password = $password;
     $this->confirmar = $confirmar;
   }
   public function setEmail(string $email){
     $this->email = $email;
   }
   public function setPassword(string $password){
     $this->password = $password;
   }
   public function setConfirmar(string $confirmar){
     $this->confirmar = $confirmar;
   }

   public function getEmail(){
   return $this->email;
   }

   public function getPassword(){
   return $this->password;
   }

   public function getConfirmar(){
   return $this->confirmar;
   }


   public function validar() : array
   {
     $errores = [];
     $formato = $this->validarEmail($this->getEmail());
     $contraseña = $this->validarPassword($this->getPassword());

     if(!$formato){
       $errores['email'] = "El email no cumple formato";
     }

     if(!$contraseña){
       $errores['password'] = "La contraseña no es valida";
     }


     if(empty($erroresRegistro)){
       $existe = baseDeDatos::existeEmail($this->getEmail());

       if(!$existe){
         $errores['email'] = "El email ya se encuentra registrado";
       }
       else{
         if ( password_verify($this->getPassword(), $this->getConfirmar()) ){
           $errores['password'] = "Las contraseñas no coinciden";

         }
       }
     }

     return $errores;
  }

}

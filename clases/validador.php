<?php


 Abstract class validador{
   const LIMITE_PASSWORD = 6;

   public function validarEmail(string $email) : bool
   {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
   }


   public function validarPassword(string $password) : bool
   {
     return strlen($password) >= self::LIMITE_PASSWORD;
   }


   public function validarVacio(string $input): bool
   {
     return !empty($input);
   }


 }

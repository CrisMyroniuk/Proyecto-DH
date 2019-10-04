<?php session_start();

  if(empty($_SESSION)){
    header('location:login.php');

} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DIGITAL SPORT</title>
  </head>
  <body>
    <?php //incluyo el header:

    require_once('header.php');  ?>

    <?php
    //incluyo el footer:
    require_once('footer.php'); ?>

  </body>
</html>

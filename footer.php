<!DOCTYPE html>
<?php
  if($_SESSION){
    $selogeo=$_SESSION['selogeo'];

  }
  else{
    $selogeo="";
  }?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">



  </head>
  <body>

      <footer>


          <div class="img-logo">
            <a href="index.php"><img src="img/logoBlanco.png" alt=""></a>

          </div>


          <div class="menu-footer">
                <ul>
                  <?php if($selogeo!=true){ ?>
                  <li><i class="fas fa-user-edit"></i> <a href="registro.php">REGISTRO</a></li>
                  <li><i class="fas fa-user"></i> <a href="login.php">LOGIN</a></li>
                <?php } ?>
                <?php if($selogeo==true){ ?>
                  <li><i class="fas fa-user-edit"></i> <a href="perfil.php">MI PERFIL</a></li>
                  <li><i class="fas fa-user"></i> <a href="logout.php">CERRAR SESION</a></li>
                <?php } ?>
                  <li><i class="far fa-question-circle"></i> <a href="faqs.php">PREGUNTAS FRECUENTES</a></li>
                  <li><i class="far fa-envelope"></i> <a href="contacto.php">CONTACTO</a></li>

                </ul>

          </div>

        <div class="copyright">
          <span>Copyright 2019 - DIGITAL SPORT©</span>
        </div>

      </footer>




  </body>
</html>

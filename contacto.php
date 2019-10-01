<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DIGITAL SPORT</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

    <?php //incluyo header:
     require_once('header.php');
     ?>
    <div class="container">
    <h1>CONTACTO</h1>


    <div class="formulario">
      <form class="" action="index.html" method="post">
        <p>
          <label for="motivo">Motivo</label>
          <select class="motivo" name="motivo">
            <option value="">Devolución</option>
            <option value="">Problema de envio</option>
            <option value="">Problema de pago</option>
            <option value="">Cambio</option>
            <option value="">Otro</option>
          </select>

        </p>
        <p>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="" required>
        </p>

        <p>
          <label for="nombre">Apellido</label>
          <input type="text" name="nombre" value="" required>
        </p>

        <p>
            <label for="email">Email</label>
            <input type="email" name="email" value="" required>
        </p>
        <p>
          <label for="telefono">Telefono</label>
          <input type="number" name="telefono" value="" required>
        </p>

        <p>
          <label for="mensaje">Cuentanos más</label>
        </p>
        <p>
          <input class="mensaje" type="text-area" name="mensaje" value="">
        </p>
        <button type="submit" class="btn btn-primary">Enviar</button>


      </form>
    </div>
    </div>
    <div class="container-fluid footer" style="padding:0 !important">
        <?php require_once('footer.html'); ?>
    </div>





      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

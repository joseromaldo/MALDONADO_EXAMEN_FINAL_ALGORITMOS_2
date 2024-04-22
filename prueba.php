<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
<?php
  // Verifica si se ha enviado el formulario y actualiza el contador
  if (isset($_POST['contador'])) {
      $contador = intval($_POST['contador']);
      $contador = ($contador % 3) + 1; // Incrementa el contador de 1 a 3, luego vuelve a 1
  } else {
      // Si es la primera vez que se carga la página, inicia el contador en 1
      $contador = 1;
  }
  ?>
  <input type="hidden" name="contador" value="<?php echo $contador; ?>">
  <input type="submit" value="Siguiente">
  </form>
</body>
</html>
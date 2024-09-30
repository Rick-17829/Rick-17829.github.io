<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="section two-column-section form">
  
  <div class="wrap-two-column">
    <div class="wrap-img_two-column">
      <div class="wrap-text-column">


        <h3>Contacta con nosotros</h3>

        <form  action="procesar_formulario.php" method="post" class="form">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" id="nombre" required>
          <br><br>
          <label for="asunto">Asunto:</label>
          <input type="text" name="asunto" id="asunto" required>
          <br><br>
          <label for="mensaje">Mensaje:</label>
          <br>
          <textarea name="mensaje" id="mensaje" rows="4" cols="40" required></textarea>
          <br><br>
          <input type="submit" value="Enviar" class="cta-a">
        </form>
      </div>
    </div>
    
    <div class="wrap-img_two-column">
      <img src="img/contactanos-removebg-preview.png" alt="">
    </div>
  </div>
</section>
</body>
</html>

<?php   
        include "footer.php";
        ?>


<?php 
    if(isset($_POST["nombre"])){ 
        $NOMBRE=$_POST["nombre"];
        $ASUNTO=$_POST["asunto"];
        $MENSAJE=$_POST["mensaje"];    
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="procesar.css">
</head>
<body>
    <div class="contenedor">
<div class="contenedor-imagen">
        <img src="img/nice-removebg-preview.png">
    </div>
    <div class="mensaje">
        <?php
echo '<br>';
echo '*** MENSAJE ENVIADO CON EXITO ***'; 
echo '<br>';
echo '<br>';
echo 'DETALLES DE TU MENSAJE: '; echo '<br>';
echo '<br>';
echo 'NOMBRE: ', $NOMBRE; 
echo '<br>';echo '<br>';
echo 'ASUNTO: ',$ASUNTO; 
echo '<br>';echo '<br>';
echo 'MENSAJE: ',$MENSAJE; 
echo '<br>';echo '<br>';
echo '** PRONTO RECIBIRAS UNA RESPUESTAS ***'; 

echo '<br>';

header ("Refresh: 10; URL=contacto.php");

        ?>
    </div>
    </div>
</body>
</html>
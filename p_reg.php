<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];
    
    // Validar que todos los campos estén llenos
    if (empty($nombre) || empty($apellidos) || empty($email) || empty($contrasena) || empty($confirmar_contrasena)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Validar que las contraseñas coincidan
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }
    header ("Refresh: 5; URL=index.php");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
<div class="registro">
            <ul>
                <p>Registro Exitoso <br> Espera y volveras a la pagina de inicio</p>
            </ul>
        </div>
</body>
</html>

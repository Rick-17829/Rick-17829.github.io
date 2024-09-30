<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <form class="form" method="post" action="p_reg.php">
        <p class="title">Registro</p>
        
        <div class="flex">
            <label>
                <input class="input" type="text" name="nombre" placeholder="" required>
                <span>Nombre</span>
            </label>
    
            <label>
                <input class="input" type="text" name="apellidos" placeholder="" required>
                <span>Apellidos</span>
            </label>
        </div>  
                                            
        <label>
            <input class="input" type="email" name="email" placeholder="" required>
            <span>Email</span>
        </label> 
            
        <label>
            <input class="input" type="password" name="contrasena" placeholder="" required>
            <span>Contraseña</span>
        </label>
        <label>
            <input class="input" type="password" name="confirmar_contrasena" placeholder="" required>
            <span>Confirmar Contraseña</span>
        </label>
        <br>
        <button type="submit" class="submit">REGISTRARSE</button>
      
    </form>
</body>
</html>

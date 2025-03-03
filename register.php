<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="database/register_db.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre_usuario" required>
            
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo_usuario" required>
            
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contrasena_usuario" required>
            
            <label for="tipo_usuario">Tipo de Usuario:</label>
            <select id="tipo_usuario" name="tipo_usuario" required>
                <option value="1">Estudiante</option>
                <option value="2">Profesor</option>
            </select>
            
            <button type="submit">Registrar</button>
        </form>
        
        <a href="index.php" class="login-btn">Iniciar Sesión</a>
    </div>
</body>
</html>
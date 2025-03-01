<?php
    session_start();
    include('database/Conexion.php');
    ini_set('display_errors', '0');
    $user = $_SESSION['usuario'];
    $sql = "SELECT * FROM cuenta WHERE correo = '$user'";
    $execute = mysqli_query($conexion, $sql);
    while($data = $execute->fetch_assoc()){
        $tipo_usuario = $data['id_tipo_usuario'];
        $nombre_usuario = $data['nombre'];
        $correo = $data['correo'];
    }
    if (isset($_SESSION['usuario'])) {
        if($tipo_usuario == 1){
            header('Location: estudiante.php');
        } else if ($tipo_usuario == 2){
            header('Location: profesor.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Francisco de Asís - Inicio de Sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>San Francisco de Asís</h1>
        <h2>Inicio de Sesión</h2>
        <form action="database/login_db.php" method="POST">
            <label for="email">Correo Electrónico:</label>
            <input name = "email" type="email" id="email" required >

            <label for="password">Contraseña:</label>
            <input name = "password" type="password" id="password" required>
            
            <button>Iniciar Sesión</button>
        </form>
    </div>
    
    <script src="login.js"></script>
</body>
</html>



<?php
    session_start();
    include('database/Conexion.php');
    $user = $_SESSION['usuario'];
    $sql = "SELECT * FROM cuenta WHERE correo = '$user'";
    $execute = mysqli_query($conexion, $sql);
    while($data = $execute->fetch_assoc()){
        $tipo_usuario = $data['id_tipo_usuario'];
        $nombre_usuario = $data['nombre'];
        $correo = $data['correo'];
    }
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
        session_destroy();
    }
    if($tipo_usuario == 2){
        header('Location: profesor.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante - Colegio San Francisco de Asís</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="estudiante.css">
</head>
<body>
    <header>
        <h1>Colegio San Francisco de Asís</h1>
        <nav>
            <a href="index.html">Inicio</a>
            <button onclick = "location.href = 'database/logout.php'">Cerrar Sesión</button>
        </nav>
    </header>
    <main>
        <h2>Mis Tareas</h2>
        <div class="container">
            <div class="card">
                <h3>Matemáticas - Álgebra</h3>
                <p>Fecha de entrega: 28/02/2025</p>
                <button class="btn">Marcar como Completada</button>
            </div>
            <div class="card">
                <h3>Historia - Revolución Francesa</h3>
                <p>Fecha de entrega: 01/03/2025</p>
                <button class="btn">Marcar como Completada</button>
            </div>
        </div>
    </main>
</body>
</html>

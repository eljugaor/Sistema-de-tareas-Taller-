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
    if($tipo_usuario == 1){
        header('Location: estudiante.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Profesor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>San Francisco de Asís</h1>
        <nav>
            <ul>
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="perfil.html">Perfil</a></li>
                <li><button onclick = "location.href = 'database/logout.php'">Cerrar Sesión</button></li>
            </ul>
        </nav>
    </header>
    
    <div class="perfil-docente">
        <img src="img/docente.png" alt="Foto del Docente">
        <span>Profesor: <?php echo $nombre_usuario?> </span>
    </div>
    
    <div class="panel">
        <h2>Panel del Profesor</h2>
        <div class="materias">
            <div class="materia" onclick="location.href = 'tareas/crear_tareas.php'">Agregar tarea</div>
            <div class="materia" onclick="location.href = 'tareas/visualizar_tareas.php'">visualizar tareas creadas</div>
            <div class="materia" onclick="mostrarCursos('Ciencias')">Ciencias</div>
        </div>
    </div>
    
    <div id="cursos" class="oculto">
        <h2 id="titulo-materia"></h2>
        <select id="lista-cursos">
            <option value="curso1">Curso 1</option>
            <option value="curso2">Curso 2</option>
            <option value="curso3">Curso 3</option>
        </select>
        
        <h3>Agregar Nueva Tarea</h3>
        <form id="formulario-tarea">
            <input type="text" id="materia" placeholder="Materia" required>
            <input type="text" id="grupo" placeholder="Grupo" required>
            <input type="text" id="titulo" placeholder="Título de la tarea" required>
            <textarea id="descripcion" placeholder="Descripción de la tarea" required></textarea>
            <button type="submit">Agregar Tarea</button>
        </form>

        <h3>Lista de Tareas</h3>
        <div id="lista-tareas"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>

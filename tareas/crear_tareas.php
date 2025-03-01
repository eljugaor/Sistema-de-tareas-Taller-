<?php
include('database/Conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tareas</title>
</head>
<body>
<div class="form-container">
    <h1>Agregar Tarea</h1>
    <div>
        <form action="#" method="post">
        <label for="nombre">Nombre de la tarea:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
        
        <label for="materia">Materia:</label>
        <select id="materia" name="materia" required>
            <option value="">Seleccione una materia</option>
            <option value="sociales">Sociales</option>
            <option value="matematicas">Matemáticas</option>
            <option value="espanol">Español</option>
        </select>
        
        <label for="fecha">Fecha de entrega:</label>
        <input type="date" id="fecha" name="fecha" required>
        
        <button type="submit">Agregar Tarea</button>
        </form>
    </div>
</body>
</html>
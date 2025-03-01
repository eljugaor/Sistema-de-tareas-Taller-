<?php
include('Conexion.php');

$nombre = $_POST['nombre_usuario'];
$correo = $_POST['correo_usuario'];
$contrasena = $_POST['contrasena_usuario'];
$tipo_usuario = $_POST['tipo_usuario'];

//encriptar contraseña
$contrasena = hash('sha512', $contrasena);

$register =  "INSERT INTO cuenta (nombre, correo, contraseña, id_tipo_usuario) VALUES ('$nombre', '$correo', '$contrasena', '$tipo_usuario')";

//validar que el correo no exista

$validar_correo = "SELECT * FROM cuenta WHERE correo = '$correo'";
$execute_validar_correo = mysqli_query($conexion, $validar_correo);
if(mysqli_num_rows($execute_validar_correo) > 0){
    echo '<script>
    alert ("El correo ya está registrado")
    window.location = "../register.php";
    </script>';
    exit();
}

//validar que la contraseña no exista

$validar_contrasena = "SELECT * FROM cuenta WHERE contraseña = '$contrasena'";
$execute_validar_contrasena = mysqli_query($conexion, $validar_contrasena);
if(mysqli_num_rows($execute_validar_contrasena) > 0){
    echo '<script>
    alert ("la contraseña ya está registrada")
    window.location = "../register.php";
    </script>';
    exit();
}
try{
    $execute = mysqli_query($conexion, $register);
    echo '<script>
    alert ("Registro exitoso")
    window.location = "../index.php";
    </script>';
}
catch(Exception $e){
    echo '<script>
    alert ("Registro fallido: Nombre, correo o contraseña invalidos")
    window.location = "../register.php";
    </script>';
}

if($tipo_usuario == 1){
    $id_cuenta = "SELECT id_cuenta FROM cuenta WHERE correo = '$correo'";
    $execute_id = mysqli_query($conexion, $id_cuenta);
    $id = mysqli_fetch_array($execute_id);
    $id_cuenta = $id['id_cuenta'];
    $register_estudiante = "INSERT INTO estudiante (id_cuenta) VALUES ('$id_cuenta')";
    $execute_estudiante = mysqli_query($conexion, $register_estudiante);
}
else{
    $id_cuenta = "SELECT id_cuenta FROM cuenta WHERE correo = '$correo'";
    $execute_id = mysqli_query($conexion, $id_cuenta);
    $id = mysqli_fetch_array($execute_id);
    $id_cuenta = $id['id_cuenta'];
    $register_profesor = "INSERT INTO profesor (id_cuenta) VALUES ('$id_cuenta')";
    $execute_profesor = mysqli_query($conexion, $register_profesor);
}
?>
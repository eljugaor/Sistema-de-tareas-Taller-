<?php
include('Conexion.php');

session_start();

$correo = $_POST['email'];
$contrasena = $_POST['password'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM cuenta WHERE correo = '$correo' AND contraseña = '$contrasena'");

$rol = mysqli_fetch_array($validar_login);

if(mysqli_num_rows($validar_login) > 0){

    if($rol['id_tipo_usuario'] == 1){
        $_SESSION['usuario'] = $correo;
        header('location: ../estudiante.php');
    }
    else if ($rol['id_tipo_usuario'] == 2){
        $_SESSION['usuario'] = $correo;
        header('location: ../profesor.php');
    }
}
else{
    echo '<script>
    alert ("Correo o contraseña incorrectos")
    window.location = "../index.php";
    </script>';
}

?>
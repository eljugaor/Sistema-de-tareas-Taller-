<?php
include('Conexion.php');

session_start();

$correo = $_POST['email'];
$contrasena = $_POST['password'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM cuenta WHERE correo = '$correo' AND contraseña = '$contrasena'");
if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header('location: ../profesor.php');
}
else{
    echo '<script>
    alert ("Correo o contraseña incorrectos")
    window.location = "../index.php";
    </script>';
}

?>
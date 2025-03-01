<?php
    session_start();
    echo '<script>
    alert ("Sesión cerrada");
    window.location = "../index.php";
    </script>';
    session_destroy();
?>
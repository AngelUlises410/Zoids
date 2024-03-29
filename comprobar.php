<?php
    session_start();

    $u = $_POST['usuario'];
    $c = $_POST['contrasena'];
    $token_seguridad = 0;

    include "./db/db.php";
    $peticion = "SELECT * FROM usuarios WHERE usuario='".$u."' AND contrasena='".$c."' ";
    $resultado = mysqli_query($conexion, $peticion);
    
    if ($fila = mysqli_fetch_array($resultado)) {
        $_SESSION['usuario'] = $fila['id'];
        $token_seguridad++;
    }

    if ($token_seguridad > 0) {
        $_SESSION['usuario'];
        header("location:menu.php");
    }else{
        header("location:index.php?mensaje=1");
    }


?>
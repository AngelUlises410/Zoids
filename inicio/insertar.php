<?php
include "../db/db.php";
$peticion = "INSERT INTO inicio VALUES(NULL, '".$_POST['nombre_completo']."', '".$_POST['edad']."',
'".$_POST['ciudad']."', '".$_POST['correo']."', '".$_POST['telefono']."', '".$_POST['fecha']."', '".$_POST['contrasena']."')";
$resultado = mysqli_query($conexion, $peticion);
header("location:inicio.php?mensaje=4");
?>
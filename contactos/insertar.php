<?php
include "../db/db.php";
$peticion = "INSERT INTO contactos VALUES(NULL, '".$_POST['nombre']."', '".$_POST['apellido_paterno']."',
'".$_POST['apellido_materno']."', '".$_POST['sexo']."', '".$_POST['correo']."', '".$_POST['telefono']."')";
$resultado = mysqli_query($conexion, $peticion);
header("location:inicio.php?mensaje=4");
?>
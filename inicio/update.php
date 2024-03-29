<?php
include "../db/db.php";
$peticion = "UPDATE inicio SET nombre_completo = '".$_POST['nombre_completo']."', edad = '".$_POST['edad']."',
ciudad = '".$_POST['ciudad']."', correo = '".$_POST['correo']."', telefono = '".$_POST['telefono']."',
fecha = '".$_POST['fecha']."', contrasena = '".$_POST['contrasena']."'  WHERE id = ".$_POST['id'].";";
$resultado = mysqli_query($conexion, $peticion);
header("location:actualizar.php?id=".$_POST['id']."");
?>


<?php
include "../db/db.php";
$peticion = "DELETE FROM contactos WHERE id = ".$_GET['id']."";
$resultado = mysqli_query($conexion, $peticion);
header("location:historial.php");
?>
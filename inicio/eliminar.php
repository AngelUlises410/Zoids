<?php
include "../db/db.php";
$peticion = "DELETE FROM inicio WHERE id = ".$_GET['id']."";
$resultado = mysqli_query($conexion, $peticion);
header("location:inicio.php");
?>
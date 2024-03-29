<?php
include "../db/db.php";
$peticion = "UPDATE contactos SET nombre = '".$_POST['nombre']."', apellido_paterno = '".$_POST['apellido_paterno']."',
apellido_materno = '".$_POST['apellido_materno']."', sexo = '".$_POST['sexo']."', correo = '".$_POST['correo']."',
telefono = '".$_POST['telefono']."'  WHERE id = ".$_POST['id'].";";
$resultado = mysqli_query($conexion, $peticion);
header("location:actualizar.php?id=".$_POST['id']."");
?>


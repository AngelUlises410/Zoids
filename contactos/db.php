<?php 

$servidor ="localhost"; //servidor con el que activaremos el servicio
$usuario = "ulises";  //Usuario de la base de datos.
$password= "1234";   //Contraseña del usuario de la base de datos.
$nombredb= "zoids";    //nombre de la base de datos en phpmyadmin

$conexion = mysqli_connect($servidor,$usuario,$password,$nombredb);
?>

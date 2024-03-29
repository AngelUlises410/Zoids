<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/menu1.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/contactos.css">
    
    <title>Contactos</title>
</head>
<body> 
 

    <!--menu principal de opciones con efecto hover-->
    <ul class="menu">

        <li><a href="./inicio.php">Volver</a></li>
        <li><a href="../menu.php">Menu Principal</a></li>
    </ul>

<!--titulo central-->

<h1 align="center">Historial de Registros</h1>
<br>
<br>
    


                   <!--aqui ponemos el codigo del buscador para con su id cerca de la tabla y su js codigo --->

                  <h5 style="text-align:center;">Ingrese el Nombre para Buscar</h5>
                  <div class="centrado">
                  <input  style="text-align:center;" type="text" id="searchInput" placeholder="Buscar...">
                  </div>



             <!--aqui puse un div con class para centrar con css la caja-->   
    <div class="cajadetabla">
    <table  id="" class="table table-light table-bordered border-primary">
                   
                <thead class="table-dark">
                       
                        <tr>
                            <th>ID</th>
                            <th>Nombre </th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Sexo</th>
                            <th>Correo Electronico</th>
                            <th>Telefono</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            
                        </tr>
                     
                    </thead>
                    
                <?php
                $i = 1;
                include "../db/db.php";
                
                $peticion = "SELECT * FROM contactos ";
                $resultado = mysqli_query($conexion, $peticion);
                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
            

                    <tbody id="tableBody"> 
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['apellido_paterno'] ?></td>
                            <td><?php echo $fila['apellido_materno'] ?></td>
                            <td><?php echo $fila['sexo'] ?></td>
                            <td><?php echo $fila['correo'] ?></td>
                            <td><?php echo $fila['telefono'] ?></td>
                            <td><a type="submit" class="btn btn-warning" href="actualizar.php?id=<?php echo $fila["id"]; ?>">Editar</a></td>
                            <td><a type="submit" class="btn btn-danger" href="eliminar.php?id=<?php echo $fila["id"]; ?>">Eliminar</a></td>
                        </tr>
                     </tbody> 
                <?php } ?>
                    
                
                </table>

<!--este codigo que viene es para la direccion del pdf para poder descargarlo -->
<div class="reporte">
<a target="_blank" href="reporte.php" class="btn btn-primary"><b>Imprimir PDF</b></a>
</div>



<!--aquitenemos los direccionadores del buscador y sus complementos--->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/buscador.js"></script>   

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/menu1.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/tabla.css">
    <title>Inicio</title>
</head>
<body> 
 

    <!--menu principal de opciones con efecto hover-->
    <ul class="menu">

    
        <li><a href="../menu.php">Menu Principal</a></li>
    </ul>



    <h1 class="text-center p-3">Autores</h1>
    <div class="container-fluid row">

    
    
<form class="col-3" action="insertar.php" method="POST">
    <h3 class="text-center text-secondary">Registro de personas</h3>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" name="nombre_completo">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Edad</label>
    <input type="number" class="form-control" name="edad" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ciudad</label>
    <input type="text" class="form-control" name="ciudad">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" name="correo" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">telefono</label>
    <input type="number" class="form-control" name="telefono" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="fecha" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena">
  </div>

  

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>




<di class="col-7 p-3">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha/mes/dia</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>

  
              <?php
                $i = 1;
                include "../db/db.php";
                
                $peticion = "SELECT * FROM inicio ";
                $resultado = mysqli_query($conexion, $peticion);
                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
            

                    <tbody id="tableBody"> 
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $fila['nombre_completo'] ?></td>
                            <td><?php echo $fila['edad'] ?></td>
                            <td><?php echo $fila['ciudad'] ?></td>
                            <td><?php echo $fila['correo'] ?></td>
                            <td><?php echo $fila['telefono'] ?></td>
                            <td><?php echo $fila['fecha'] ?></td>
                            <td><?php echo $fila['contrasena'] ?></td>
                            <td><a type="submit" class="btn btn-warning" href="actualizar.php?id=<?php echo $fila["id"]; ?>">Editar</a></td>
                            <td><a type="submit" class="btn btn-danger" href="eliminar.php?id=<?php echo $fila["id"]; ?>">Eliminar</a></td>
                        </tr>
                     </tbody> 
                <?php } ?>
                    
                
                </table>
                
</div>
        
    </div>

   


    

                










    </body>

</html>
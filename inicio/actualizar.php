
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/menu1.css">
    <title>Actualizar</title>
    </head>
<body> 
    
    <!--menu principal de opciones con efecto hover-->
    <ul class="menu">

      
        <li><a href="./inicio.php">Regresar a Historial</a></li>
        <li><a href="../menu.php">Menu Principal</a></li>
    </ul>

                        
                <?php
                include "../db/db.php";
                $dato=$_GET["id"];
                //echo $id;
                $peticion = "SELECT * FROM inicio WHERE id= $dato";  
                $resultado = mysqli_query($conexion, $peticion);
                $i=1;
                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
            
            <br>
    
<center> 
              <div class="d-flex justify-content-center" style="border: 3px solid black; background-size:cover; width: 270px;height: 560px;border-radius: 20px;">
                <form  action="update.php" method="post">
                <h2 >Formulario <?php echo  $i++; ?></h2>
                
                    <input type="text" name="id" value="<?php echo $fila['id']; ?>"hidden>
                    <label class="form-label">Nombre: </label>
                    <br>
                    <input class="controls" type="text" name="nombre_completo" placeholder="nombre" value="<?php echo $fila['nombre_completo']; ?>">
                    <br>
                    <label class="form-label">Edad: </label>
                    <br>
                    <input class="controls" type="text" name="edad" placeholder="edad"  value="<?php echo $fila['edad']; ?>">
                    <br>
                    <label class="form-label">Ciudad: </label>
                    <br>
                    <input class="controls"type="text" name="ciudad" placeholder="ciudad"  value="<?php echo $fila['ciudad']; ?>">
                    <br>
                    <label class="form-label">Correo: </label>
                    <br>
                    <input class="controls" type="email" name="correo" placeholder="correo"  value="<?php echo $fila['correo']; ?>">
                    <br>
                    <label class="form-label">Telefono: </label>
                    <br>
                    <input class="controls" type="number" name="telefono" placeholder="telefono"  value="<?php echo $fila['telefono']; ?>">
                    <br>
                    <label class="form-label">Fecha: </label>
                    <br>
                    <input class="controls" type="date" name="fecha" placeholder="fecha"  value="<?php echo $fila['fecha']; ?>">
                    <br>
                    <label class="form-label">Contraseña: </label>
                    <br>
                    <input class="controls" type="password" name="contrasena" placeholder="contraseña"  value="<?php echo $fila['contrasena']; ?>">
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" value="Actualizar">Actualizar</button>
                    <a class="btn btn-danger" href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                </form>

                </div>
</center>
<br>
<br>



                <?php } ?>
                  
</body>

</html>

<?php{    
}else{
    header("location:menu.php?mensaje=2");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/menu1.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <title>Contactos</title>
</head>
<body> 
 

    <!--menu principal de opciones con efecto hover-->
    <ul class="menu">

    <li><a href="./historial.php">Historial</a></li>
        <li><a href="../menu.php">Menu Principal</a></li>
    </ul>

<br>
    <center> 
    <div class="d-flex justify-content-center" style="border: 3px solid black; background-size:cover; width: 250px;height: 450px;border-radius: 20px;">
    <form action="insertar.php" method="post">
                <h2 class="h2">Contactos</h2>
                    <label form="nombre"class="form-label;">Nombre: </label>
                    <br>
                    <input class="controls" type="text" name="nombre"  placeholder="nombre">
                    <br>
                    <label >Apellido Paterno: </label>
                    <br>
                    <input class="controls" type="text" name="apellido_paterno"  placeholder="apellido paterno">
                    <br>
                    <label >Apellido Materno: </label>
                    <br>
                    <input class="controls" type="text" name="apellido_materno" placeholder="apellido materno">
                    <br>
                    <label >Sexo: </label>
                    <br>
                    <input class="controls" type="text" name="sexo" placeholder="sexo">
                    <br>
                    <label >Correo: </label>
                    <br>
                    <input class="controls"type="email" name="correo" placeholder="correo">
                    <br>
                    <label>Telefono: </label>
                    <br>
                    <input class="controls" type="number" name="telefono" placeholder="telefono">
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" value="Agregar">Enviar</button>
                </form>

</div>
</center>


<hr size="8px" color="black" />                                         <!---linea separadora-->

  

</body>

</html>
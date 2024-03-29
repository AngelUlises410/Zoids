<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/login.css">
     <!--aqui pusimos el cdn library de la pagina awesome font icon-->
     <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
     
    <title>Login</title>
<!--esta estiqueta style hasta donde termina es para imagen de fondo de login -->
    <style>
    body{
    background-image: url(./assets/img/fondo2.jpg); /*aqui podemos insertar una imagen de fondo de pantalla en login*/
    background-size: cover;                        /*con este codigo cubre todo el fondo de login*/
    background-repeat: no-repeat;                  /*con este codigo no repite imagen en fondo de login*/
    background-position: center;                   /*con este codigo centra totalmente el fondo*/
    background-attachment: fixed;
        }
    </style>


</head>

<body>
     
<!--mensajes de alerta para inicio de sesion de login-->

<?php
        error_reporting(0);
        if ($_GET['mensaje']==1) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Usuario y/o contraseña</strong> Incorrectos.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';

        }elseif ($_GET['mensaje']==2) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No puedes ingresar de esta manera</strong> Prueba colocando tu usuario y contraseña.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

        }elseif ($_GET['mensaje']==3) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Exito!</strong> Tu sesión se cerro satisfactoriamente.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }

    ?>

<!--creacion de loggin-->



<form class="formulariologin" action="comprobar.php" method="post">
      
      <center>
      <img src="./assets/img/logo2.jpg" width="200" height="100" alt="...">
      </center>
      <br>
      <h1 class="h2">Inicio de Sesión</h1>
      <span class="icon"><i class="validacion_usuario fas fa-solid fa-user"></i></span>
      <label class="label">Usuario: </label>
      <input class="controls" type="text" name="usuario" placeholder="usuario "required>
      <div class="form-text">Aqui escribe tu Usuario.</div>
      <br>
      <span class="icon"><i class="validacion_contrasena fas fa-solid fa-lock"></i></span>
      <label class="label">Contraseña: </label>
      <input class="controls" type="password" name="contrasena" placeholder="contraseña" required>
      <div class="form-text">Aqui escribe tu Contraseña.</div>
      <br>
      <button type="submit">Entrar</button>
    
</form>

    
<!--este codigo de abajo es el mensaje final del login hasta abajo con derechos-->

<p align="center">© 2023  Todos los derechos reservados - Angel Carrales</p>

<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/funciones.js"></script>

</body>
</html>
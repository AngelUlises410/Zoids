<?php
session_start();
session_destroy();
?>
<!--este codigo de arriba es para cuando cierras sesion quede totalmente cerrado y nadie pueda entrar-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/menu.css"/>
    <link rel="stylesheet" href="./assets/css/menu1.css"/>
    <title>Menu</title>
</head>
<body> 
 

    <!--menu principal de opciones con efecto hover-->
    <ul class="menu">

        <li><a href="inicio/inicio.php">INICIO</a></li>
        <li><a href="contactos/inicio.php">CONTACTOS</a></li>
        <li><a href="informacion/inicio.php">INFORMACION</a></li>
        <li><a href="#">DETALLES</a></li>
        <li><a href="autor/inicio.php">AUTOR</a></li>
        <li><a href="#">SERIE</a></li>
        <li><a href="#">OPCIONES</a></li>
        <li><a href="./cerrar.php">CERRAR </a></li>
        
    </ul>
 



      



   <!--aqui usamos los div con id para creacion de css de las cajas en menu--> 
   
   <div id="general">
    <div id="ofertas">
        <h1 align="right" style=color:white>Historia</h1>
       
        <p class="historia"style=color:white> La historia se inicia en el planeta Zi, un planeta habitado por grandes compañeros mecánicos conocidos como "zoids" que han sido modificados por los humanos para ser utilizados como armas de guerra .

            En este planeta, dos naciones que antiguamente se encontraban enemistadas, la República de Helic y el Imperio de Guylos, se encuentran a comienzos de una nueva guerra, luego de ser descubierta una antigua tecnología que puede favorecer a ambos ejércitos.
            
            En ese momento, un joven aventurero llamado Van Freiheit, que sueña con ser piloto de zoids, encuentra en unas antiguas ruinas un organoide a quien llama Zeek, el que luego reaviva a Shield Liger, un zoid de combate que Van conducirá para luchar. Más tarde, en las mismas ruinas encuentra a una niña, a quien llama Fine. Debido a que ella ha perdido su memoria, los tres parten de viaje en búsqueda de su pasado. Durante su camino conocen a dos importantes compañeros y amigos, Moonbay, una transportista de cargas e Irvine, un cazarrecompensas.
            
            Mientras tanto, Proitzen, el general en jefe del ejército imperial, quiere comenzar una nueva guerra que acabe con la nación republicana. Primero intenta asesinar a Rudolph, el legítimo sucesor de la corona de Guylos, transformándose luego en el regente del imperio.
            
            Van y sus compañeros se involucran en esta guerra y detienen la ambición de Proitzen. Luego ambas naciones hacen las paces.
            
            Dos años más tarde, Van, quien ya se encuentra convertido en un destacado piloto zoid, y Fine pasan a formar parte de la Fuerza Guardián, un equipo encargado de mantener la paz, y que está conformado por miembros tanto por la nación republicana como la imperial. Dentro de este grupo conocen a un nuevo compañero, Thomas Schwarz, un experto en computadoras que lucha utilizando su Dibison.
            
            La Fuerza Guardián se formó debido a que extraños atentados comienzan a ocurrir en ambas naciones. El principal sospechoso es un hombre llamado Hiltz, quien luego de varios ataques contra las naciones, logra apoderarse del Death Saurer y poner en peligro la humanidad, pero Van y sus aliados se encargan de detenerlo.</p>
            
    </div>

    <div id="novedades">
        <h1 align="center">Geno Breaker </h1>
        <section>
            <p>EZ-034 Geno Breaker Repackage Version Highend Master Zoids Model Kit por Kotobukiya</p>

        </section>

        <article>
            <center>
            <img id="efecto1"src="./assets/img/geno1.jpg" width="200" height="200" alt="...">
            <img id="efecto2"src="./assets/img/geno2.jpg" width="200" height="200" alt="...">
            <img id="efecto3"src="./assets/img/geno3.jpg" width="200" height="200" alt="...">
            </center>
                  
        </article>
    </div>

    

    <div id="body">
        <h1>Blade Liger</h1>
        <section>
            <p> RZ-028 Blade Liger AB Kit de modelo, multicolor por Kotobukiya </p>

        </section>


        <article>
            <center>
            <img id="mundo1"src="./assets/img/van1.jpg" width="200" height="200" alt="...">
            <img id="mundo2"src="./assets/img/van2.jpg" width="200" height="200" alt="...">
            <img id="mundo3"src="./assets/img/van3.jpg" width="200" height="200" alt="...">
            <img id="mundo4"src="./assets/img/van4.jpg" width="200" height="200" alt="...">
            <img id="mundo5"src="./assets/img/van5.jpg" width="200" height="200" alt="...">
            <img id="mundo6"src="./assets/img/van6.jpg" width="200" height="200" alt="...">
            </center>
                  
        </article>
    </div>

    <div id="musica">
        <h1 align="center" style=color:white>Musica</h1>
        <br><br><br>
            <center>
            <img src="./assets/img/logo2.jpg"  width="50" height="40">
            </center>

        <center>
         <!--codigo para poner canciones dentro del la pagina mp3 y wav-->
         <audio controls autoplay loop> <!--si quitamos el "autoplay"al momento de recargar ya no sonara y el termino loop es para volver a reproducir al terminar y mute para cargar en silencio-->
            <source src="./audio/Wild Flowers - Opening Zoids Full Latino por Cesar Franco.mp3" type="audio/mpeg">
            tu audio no es compatible con navegador en html
        </audio>
                 <!--hasta aqui termina el codigo de  musica -->
        </center>
    </div>

    <div id="video">
        <h1 align="center" style=color:white>Video</h1>
        <div style="text-align:center;">
            <video width="300px"  controls>
                 <source src="./video/ZOIDS_ The Movie Trailer 2018 (Oficial) Español Latino.mp4" type="video/mp4">
                   tu navegador no es complatible con html5
            </video>
        </div>
            <div style="text-align:center;">
            <a target="_blank" href="https://www.youtube.com/watch?v=tNozBAfXq1M">Link: Zoids de Youtube </a>
            <p style="color:white">Aqui podemos ver la reseña de la pelicula. </p>
            </div>
    </div>

    
    </div>


    <p align="center" >©Todos los derechos reservados  22/10/2023</p>
    <br>
    <center>
    <img src="./assets/img/logo2.jpg"  width="50" height="40">
    </center>
    
</body>
</html>
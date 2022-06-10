<?php

   function get_random_token ()
   {
      return rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9) .
             rand(0, 9);
   }

?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>__onedevs__</title>
      <meta name="description" content="OneDevs">
      <meta name="author" content="OneDevs">
      <meta property="og:title" content="OneDevs">
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://onedevs.tech">
      <meta property="og:description" content="OneDevs">
      <link rel="stylesheet" href="css/styles.css?v=<?= get_random_token() ?>">
      <link rel="stylesheet" href="css/home.css?v=<?= get_random_token() ?>">
   </head>

   <body>

      <center>
         <img src="images/logo-solo-circulo.svg" width="200" alt="logo">
         <div class="nasalized" style="font-size: 1.2em;">__ OneDevs __</div>
         <div class="nasalized" style="font-size: 0.5em;">Developing The Future</div>
      </center>

      <div class="main-menu-home">
         <div class="main-menu-home-item">Quiénes somos</div>
         <div class="main-menu-home-item">Qué hacemos</div>
         <div class="main-menu-home-item">Stack tecnológico</div>
         <div class="main-menu-home-item">Dónde estamos</div>
         <div class="main-menu-home-item">A quién damos Servicio</div>
         <div class="main-menu-home-item">Nuestro Portfolio</div>
         <div class="main-menu-home-item">Contacta con Nosotros</div>
      </div>

      <!--
        -- QUIÉNES SOMOS
        -->
      <div class="home-section">
         <div class="title">Quiénes somos</div>
         <div class="content">
            <u>OneDevs Digital Services S.L.U.</u> nace para dar <u>Servicio</u>
            a pequeñas empresas y comercios, PYMES y grandes marcas<br />
            <br />
            Somos un grupo de desarrolladores apasionados de la Tecnología, del
            Desarrollo de Software y del Hardware<br />
            <br />
            Si tu empresa u organización tiene alguna necesidad tecnológica,
            contacta con nosotros. <b>Te ayudaremos</b><br />
            <br />
            <img src="images/technology.jpg" width="800" />
         </div>
      </div>

      <!--
        -- QUÉ HACEMOS
        -->
      <div class="home-section">
         <div class="title">Qué hacemos</div>
         <div class="content">
            Nos dedicamos a la <u>construcción de sites en Internet</u><br />
            <br />
            Priorizamos al pequeño comercio, antes que a las grandes marcas<br />
            <br />
            También realizamos trabajos de <u>publicidad</u>: SEO,
            Marketing On-Line y presencia en Redes Sociales<br />
         </div>
      </div>

      <!--
        -- STACK TECNOLÓGICO
        -->
      <div class="home-section">
         <div class="title">Stack tecnológico</div>
         <div class="content">
            Usamos PHP 8 y MySQL en nuestros desarrollos<br />
            <br />
            Construimos sites enteros usando PHP plano, pero también manejamos WordPress y Drupal<br />
            <br />
            También trabajamos con Javascript, JQuery y React<br />
            <br />
            <img src="images/developers.jpg" width="800" />
         </div>
      </div>

      <!--
        -- DÓNDE ESTAMOS
        -->
      <div class="home-section">
         <div class="title">Dónde estamos</div>
         <div class="content">
            No disponemos de oficinas físicas.<br />
            <br />
            Todo ocurre On-Line.<br />

         </div>
      </div>

   </body>
</html>

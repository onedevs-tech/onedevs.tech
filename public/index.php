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
      <title>OneDevs</title>
      <link rel="icon" href="images/logo-solo-circulo.png" type="image/x-icon" />
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
         <div class="main-menu-home-item"><a class="section" href="#quienes-somos">Quiénes somos</a></div>
         <div class="main-menu-home-item"><a class="section" href="#que-hacemos">Qué hacemos</a></div>
         <div class="main-menu-home-item"><a class="section" href="#stack-tecnologico">Stack Tecnológico</a></div>
         <div class="main-menu-home-item"><a class="section" href="#donde-estamos">Dónde estamos</a></div>
         <div class="main-menu-home-item"><a class="section" href="#a-quien-damos-servicio">A quién damos Servicio</a></div>
         <div class="main-menu-home-item"><a class="section" href="#nuestro-portfolio">Nuestro Portfolio</a></div>
         <div class="main-menu-home-item"><a class="section" href="#contacta-con-nosotros">Contacta con Nosotros</a></div>
      </div>

      <!--
        -- QUIÉNES SOMOS
        -->
      <div class="home-section">
         <a name="quienes-somos"></a>
         <br />
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
            <br />
            <img src="images/technology.jpg" width="800" /><br />
            <br />
         </div>
      </div>

      <!--
        -- QUÉ HACEMOS
        -->
      <div class="home-section">
         <a name="que-hacemos"></a>
         <br />
         <div class="title">Qué hacemos</div>
         <div class="content">
            Nos dedicamos a la <u>construcción de sites en Internet</u><br />
            <br />
            Priorizamos al pequeño comercio, antes que a las grandes marcas<br />
            <br />
            También realizamos trabajos de <u>publicidad</u>: SEO,
            Marketing On-Line y presencia en Redes Sociales<br />
            <br />
         </div>
      </div>

      <!--
        -- STACK TECNOLÓGICO
        -->
      <div class="home-section">
         <a name="stack-tecnologico"></a>
         <br />
         <div class="title">Stack Tecnológico</div>
         <div class="content">
            Usamos PHP 7 y 8, y MySQL, en nuestros desarrollos<br />
            <br />
            Construimos sites enteros usando PHP plano, pero también manejamos WordPress y Drupal<br />
            <br />
            También trabajamos con Javascript, JQuery y React<br />
            <br />
            <br />
            <img src="images/developers.jpg" width="800" /><br />
            <br />
         </div>
      </div>

      <!--
        -- DÓNDE ESTAMOS
        -->
      <div class="home-section">
         <a name="donde-estamos"></a>
         <br />
         <div class="title">Dónde estamos</div>
         <div class="content">
            No disponemos de oficinas físicas... todo ocurre On-Line! 😉<br />
            <br >
            Próximamente nos animaremos a crear espacios de coworking<br />
            <br />
         </div>
      </div>

      <!--
        -- CONTACTA CON NOSOTROS
        -->
      <div class="home-section">
         <a name="contacta-con-nosotros"></a>
         <br />
         <div class="title">Contacta con nosotros</div>
         <div class="content">
            <a href="tel:+34744653072">+34 744 653 072</a><br />
            <br />
            <a href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
            <br />
         </div>
      </div>

   </body>

</html>

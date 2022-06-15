<?php

   $src_dir = __DIR__ . '/../src/';

   include $src_dir . 'init.php';
   include $src_dir . 'functions/random_numeric_token.php';
   include $src_dir . 'widgets/onedevs_favicons.php';
   include $src_dir . 'widgets/onedevs_title.php';
   include $src_dir . 'widgets/onedevs_logo.php';

?>

<!DOCTYPE html>
<html lang="es">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= onedevs_title('onedevs') ?></title>
      <?= onedevs_favicons() ?>
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <meta name="description" content="OneDevs">
      <meta name="author" content="OneDevs">
      <meta property="og:title" content="OneDevs">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://onedevs.tech">
      <meta property="og:description" content="OneDevs">
      <link rel="stylesheet" href="css/vars.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="css/fonts.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="css/generic.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="css/home.css?v=<?= random_numeric_token() ?>">
   </head>

   <body>

      <?= onedevs_logo() ?>

      <div class="home-main-menu">
         <div class="home-main-menu-item"><a class="section" href="#quienes-somos">Quienes somos</a></div>
         <div class="home-main-menu-item"><a class="section" href="#que-hacemos">Que hacemos</a></div>
         <div class="home-main-menu-item"><a class="section" href="#stack-tecnologico">Stack Tecnologico</a></div>
         <div class="home-main-menu-item"><a class="section" href="#donde-estamos">Donde estamos</a></div>
         <div class="home-main-menu-item"><a class="section" href="#a-quien-damos-servicio">A quien damos Servicio</a></div>
         <div class="home-main-menu-item"><a class="section" href="#nuestro-portfolio">Nuestro portfolio</a></div>
         <div class="home-main-menu-item"><a class="section" href="#contacta-con-nosotros">Contacta con nosotros</a></div>
      </div>

      <!--
        -- QUIÉNES SOMOS
        -->
      <div class="home-section">
         <a name="quienes-somos"></a>
         <br />
         <div class="title">Quiénes somos</div>
         <div class="content">
            <u>OneDevs Digital Services</u> nace para dar <u>Servicio Digital</u>
            a pequeñas empresas y comercios, PYMES y grandes marcas<br />
            <br />
            Somos un grupo de desarrolladores apasionados de la Tecnología, del
            Desarrollo de Software y del Hardware<br />
            <br />
            Si tu empresa u organización tiene alguna necesidad tecnológica,
            contacta con nosotros. <b>Te ayudaremos</b><br />
            <br />
            <br />
            <img src="images/developers.jpg" width="800" /><br />
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
            <img src="images/technologies/stack-tecnologico.png" alt="Stack Tecnológico" />
            </div>
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
            No disponemos de oficinas físicas, todo ocurre On-Line! 😉
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
            <a href="tel:+34744653072"><img src="images/whatsapp-icon.png" width="50" align="absmiddle" alt="WhatsApp" /> &nbsp; ( +34 ) 744 653 072</a><br />
            <br />
            <a href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
            <br />
            <br />
         </div>
      </div>

   </body>

</html>

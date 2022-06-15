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
         <div class="home-main-menu-item"><a class="section" href="#nuestro-portfolio">Nuestro portfolio</a></div>
         <div class="home-main-menu-item"><a class="section" href="#contacta-con-nosotros">Contacta con nosotros</a></div>
      </div>

      <!--
        -- QUIÉNES SOMOS
        -->

      <div class="home-section" id="quienes-somos">
         <h2 class="title">quiénes somos</h2>
         <p class="content">
            <b>OneDevs Digital Services</b> nace para dar <b>Servicio Digital</b>
            a pequeñas empresas y comercios, PYMES y grandes marcas
         </p>
         <p class="content">
            Somos un grupo de desarrolladores apasionados de la Tecnología,
            concretamente del Desarrollo de Software
         </p>
         <p class="content">
            Si tu empresa u organización tiene alguna necesidad tecnológica,
            contacta con nosotros, <b>te ayudaremos</b>
         </p>
         <table class="onedevs-members" cellpadding="20" align="center">
            <tbody>
               <tr>
                  <td><img class="onedevs-member" src="images/onedevs-members/richi.jpg" width="200" /></td>
                  <td class="member-description">
                     <b>Ricardo Ruiz Martínez</b><br />
                     CEO<br />
                     Sales Manager<br />
                     Backend Developer<br />
                     richiruizmartinez@gmail.com
                  </td>
               </tr>
            </tbody>
         </table>
      </div>

      <!--
        -- QUÉ HACEMOS
        -->

      <div class="home-section" id="que-hacemos">
         <h2 class="title">qué hacemos</h2>
         <p class="content">
            Nos dedicamos a la <b>construcción de web o sites en Internet</b>
         </p> 
         <p class="content">
            Trabajamos con el pequeño comercio, PYMES, la Administración Pública
            y grandes marcas u organizaciones
         </p> 
      </div>

      <!--
        -- STACK TECNOLÓGICO
        -->

      <div class="home-section" id="stack-tecnologico">
         <h2 class="title">stack tecnológico</h2>
         <p class="content">
            Usamos PHP 7 y 8, y MySQL
         </p>
         <p class="content">
            Construimos sites usando PHP plano.
         </p>
         <p class="content">
            También controlamos de WordPress y Drupal
         </p>
         <p class="content">
            También trabajamos con Javascript, JQuery y React
         </p>  
         <img src="images/technologies/stack-tecnologico.png" alt="Stack Tecnológico"  class="imgrs" />
            
         </div>
      </div>

      <!--
        -- DÓNDE ESTAMOS
        -->

      <div class="home-section" id="donde-estamos">
         <h2 class="title">dónde estamos</h2>
         <p class="content">
            No disponemos de oficinas físicas,<br />
            todo ocurre On-Line! 😉
         </p>
      </div>

      <!--
        -- NUESTRO PORTFOLIO
        -->

      <div class="home-section" id="nuestro-portfolio">
         <h2 class="title">nuestro portfolio</h2>
         <p class="content">
            Estamos empezando ...<br />
            <br />
            <a href="https://www.tattoorubio.com">Tattoo Rubio</a>
         </p>
      </div>

      <!--
        -- CONTACTA CON NOSOTROS
        -->

      <div class="home-section" id="contacta-con-nosotros">
         <h2 class="title">contacta con nosotros</h2>
         <p class="content">
            <a href="tel:+34744653072"><img src="images/whatsapp-icon.png" width="50" align="absmiddle" alt="WhatsApp" /> &nbsp; +34 &nbsp; 744 &nbsp; 653 &nbsp; 072</a>
         </p>
         <p class="content">
            <a href="mailto:onedevs.digital.services@gmail.com">onedevs.digital.services@gmail.com</a>
         </p>
      </div>

   </body>

</html>

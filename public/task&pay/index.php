<?php

   include '/php/init.php';
   include '/php/get_random_numeric_token.php';
   include '/php/widgets/logo-onedevs.php';
*/
?>

<html lang="es">

   <head>
      <title>Task & Pay 🤘</title>
      <link rel="icon" type="image/png" sizes="16x16"  href="../favicons/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32"  href="../favicons/favicon-32x32.png">
      <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="../favicons/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-touch-icon-76x76.png">
      <link rel="icon" type="image/png" sizes="96x96"  href="../favicons/apple-touch-icon-96x96.png">
      <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="../favicons/android-icon-192x192.png">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="../css/fonts.css?v=<?= get_random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/generic.css?v=<?= get_random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/task&pay.css?v=<?= get_random_numeric_token() ?>">
   </head>

   <body class="money">

      <?= logo_onedevs() ?>

      <div class="app">
         Task & Pay
      </div>

      <!-- DATE TIME -->

      <div class="date">
         <?= \date('l, j F Y G:i:s a e'); ?>
      </div>

      <div class="money">

         <!-- AVAILABLE -->

         <table class="available" align="center">
            <thead>
               <th>Available</th>
            </thead>
            <tbody>
               <tr>
                  <td>26.438,14 €</td>
               </tr>
            </tbody>
         </table>

         <!-- OFFERS -->

         <table class="offers" align="center">
            <thead>
               <tr>
                  <th colspan="4" class="title">Work Offers</th>
               </tr>
               <tr>
                  <th>From</th>
                  <th>Offer</th>
                  <th>Project</th>
                  <th>Description</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>765 €</td>
                  <td>Task & Pay</td>
                  <td>Ahora mismo "Task & Pay" es un simple HTML que se actualiza a mano. La info debe estar en base de datos (MySQL) y ha de haber un pequeño panel de control</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>215 €</td>
                  <td>ANY</td>
                  <td>Código Javascript para poner música (de un vídeo de YouTube) de fondo a cualquier página (que se oiga la música al entrar a la página, pero que no aparezca el vídeo de YouTube)</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>35 €</td>
                  <td><a href="https://onedevs.tech">onedevs.tech</a></td>
                  <td>Arreglar el menú de la home, ahora mismo cuando pasas por encima las letras no se ven, porque está todo blanco</td>
               </tr>
            </tbody>
         </table>

         <!-- PAYMENTS -->

         <table class="transactions" align="center">
            <thead>
               <tr>
                  <th colspan="8" class="title">Payments</th>
               </tr>
               <tr>
                  <th>From</th>
                  <th>To</th>
                  <th>Value</th>
                  <th>Payment Date</th>
                  <th>Project</th>
                  <th>Task / Payment Description</th>
                  <th>Paid</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">75 €</td>
                  <td>Monday, 6 June 2022 09:11:32 am Europe/Madrid</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td>IMAGENES EGIPCIAS</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">125 €</td>
                  <td>Monday, 6 June 2022 19:51:36 pm Europe/Madrid</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td>MENU RESPONSIVE WWW.TATTOORUBIO.COM</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">70 €</td>
                  <td>Tuesday, 7 June 2022 11:05:21 am Europe/Madrid</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td>TRIBAL WWW.TATTOORUBIO.COM</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">50 €</td>
                  <td>Tuesday, 7 June 2022 12:21:55 pm Europe/Madrid</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td>WWW.TATTORUBIO.COM BANDERAS Y FAVICON</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">230 €</td>
                  <td>Wednesday, 8 June 2022 8:18:10 am Europe/Madrid</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td>ONEDEVS.TECH DISEÑO LOGO Y ADAPTACION A SVG</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Sergio Villarreal Sáez</td>
                  <td class="money">100 €</td>
                  <td>Wednesday, 8 June 2022 10:02:12 am Europe/Madrid</td>
                  <td>Empresa</td>
                  <td>GESTIONES CREACION EMPRESA</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">75 €</td>
                  <td>Wednesday, 8 June 2022 17:14:05 pm Europe/Madrid</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td>ONEDEVS.TECH TRIBAL MENOS SOBRECARGADO</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">25 €</td>
                  <td>Wednesday, 8 June 2022 17:57:35 pm Europe/Madrid</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td>ONEDEVS.TECH ONEDEVS.TECH LOGO CON F MAYUSCULA</td>
                  <td class="completed">🤟</td>
               </tr>
               <tr>
                  <td>Ricardo Ruiz Martínez</td>
                  <td>Jonathan Martínez</td>
                  <td class="money">200 €</td>
                  <td>Friday, 10 June 2022 10:45:15 am Europe/Madrid</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td>ONEDEVS.TECH REMAQUETAR TASKPAY Y FAVICON</td>
                  <td class="completed">🤟</td>
               </tr>
            </tbody>
         </table>

      </div>

   </body>

</html>

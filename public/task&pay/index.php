<?php

   $src_dir = __DIR__ . '/../../src/';

   include $src_dir . 'init.php';
   include $src_dir . 'functions/random_numeric_token.php';
   include $src_dir . 'widgets/onedevs_title.php';
   include $src_dir . 'widgets/onedevs_favicons.php';
   include $src_dir . 'widgets/onedevs_logo.php';

   $now_unixtime = \time();
   $now_date = \date('Y-m-j * l', $now_unixtime);
   $now_time = \date('G:i:s a', $now_unixtime);
   $now_zone = \date('e', $now_unixtime);

?>

<html lang="es">

   <head>
      <title>🤘 🤑 Task & Pay - - <?= onedevs_title() ?></title>
      <?= onedevs_favicons() ?>
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="../css/vars.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/fonts.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/generic.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/task&pay.css?v=<?= random_numeric_token() ?>">
   </head>

   <body class="money">

      <?= onedevs_logo() ?>

      <center>
         <div class="app">
            Task & Pay
            <div class="datetime">
               <?= $now_date ?><br />
               <?= $now_time ?><br />
               <?= $now_zone ?><br />
            </div>
         </div>
      </center>

      <div class="taskpay">

         <!-- AVAILABLE -->

         <table class="table available" align="center">
            <thead>
               <tr>
                  <th colspan="4" class="title">Available</th>
               </tr>
               <tr>
                  <th>Bank Country</th>
                  <th>Bank</th>
                  <th>IBAN</th>
                  <th>🤘🤑</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Spain</td>
                  <td>Cajasur Kutxabank</td>
                  <td>ES92 0237 6057 8091 7267 1245</td>
                  <td class="money">4.263,86 €</td>
               </tr>
            </tbody>
         </table>

         <!-- TASKS -->

         <table class="table tasks" align="center">
            <thead>
               <tr>
                  <th colspan="4" class="title">Tasks</th>
               </tr>
               <tr>
                  <th>Bidder</th>
                  <th>Reward</th>
                  <th>Project</th>
                  <th>Task Description</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">315,00 €</td>
                  <td class="nowrap"><a href="https://onedevs.tech">onedevs.tech</a></td>
                  <td>Fix mobile version of onedevs.tech home</td>
               </tr>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">215,00 €</td>
                  <td class="nowrap">ANY</td>
                  <td>Javascript code to put music (from a YouTube video) in the background of any page (the music is heard when entering the page, but the video is not seen)</td>
               </tr>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">215,00 €</td>
                  <td class="nowrap">ANY</td>
                  <td>Javascript code to put music (from a SoundCloud video) in the background of any page (let the music be heard when entering the page, if the SoundCloud controls appear better)</td>
               </tr>
            </tbody>
         </table>

         <!-- PAYMENTS -->

         <table class="table payments" align="center">
            <thead>
               <tr>
                  <th colspan="8" class="title">Payments</th>
               </tr>
               <tr>
                  <th>Payer</th>
                  <th>Receiver</th>
                  <th>Project</th>
                  <th>Banking Concept</th>
                  <th>Payment</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">IMAGENES EGIPCIAS</td>
                  <td class="payment money nowrap align-right" title="Monday, 6 June 2022 09:11:32 am Europe/Madrid">75,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">MENU RESPONSIVE WWW.TATTOORUBIO.COM</td>
                  <td class="payment money nowrap align-right" title="Monday, 6 June 2022 19:51:36 pm Europe/Madrid">125,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">TRIBAL WWW.TATTOORUBIO.COM</td>
                  <td class="payment money nowrap align-right" title="Tuesday, 7 June 2022 11:05:21 am Europe/Madrid">70,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">WWW.TATTORUBIO.COM BANDERAS Y FAVICON</td>
                  <td class="payment money nowrap align-right" title="Tuesday, 7 June 2022 12:21:55 pm Europe/Madrid">50,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH DISEÑO LOGO Y ADAPTACION A SVG</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 8:18:10 am Europe/Madrid">230,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">sergio V.S.</td>
                  <td>Enterprise</td>
                  <td class="banking-concept">GESTIONES CREACION EMPRESA</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 10:02:12 am Europe/Madrid">100,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">ONEDEVS.TECH TRIBAL MENOS SOBRECARGADO</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 17:14:05 pm Europe/Madrid">75,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH ONEDEVS.TECH LOGO CON F MAYUSCULA</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 17:57:35 pm Europe/Madrid">25,00 €</td>
                  <td>🤟</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH REMAQUETAR TASKPAY Y FAVICON</td>
                  <td class="payment money nowrap align-right" title="Friday, 10 June 2022 10:45:15 am Europe/Madrid">200,00 €</td>
                  <td>🤟</td>
               </tr>
            </tbody>
         </table>

      </div>

   </body>

</html>

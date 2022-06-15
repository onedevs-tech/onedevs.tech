<?php

   $src_dir = __DIR__ . '/../../src/';

   include $src_dir . 'init.php';
   include $src_dir . 'functions/random_numeric_token.php';
   include $src_dir . 'widgets/onedevs_title.php';
   include $src_dir . 'widgets/onedevs_favicons.php';
   include $src_dir . 'widgets/onedevs_logo.php';

?>

<html lang="es">

   <head>
      <title>🤑 task & pay</title>
      <?= onedevs_favicons('security') ?>
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="../css/vars.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/fonts.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/generic.css?v=<?= random_numeric_token() ?>">
      <link rel="stylesheet" href="../css/taskpay.css?v=<?= random_numeric_token() ?>">
   </head>

   <body>

      <center>
         <div class="app">
            task & pay
         </div>
      </center>

      <div class="environments">
         <a href="http://onedevs.local/taskpay">dev</a>
         <a href="https://onedevs.tech/taskpay">pro</a>
      </div>

      <div class="taskpay">

         <!-- TASK -->

         <table class="table tasks" align="center">
            <thead>
               <tr>
                  <th colspan="4" class="title">task</th>
               </tr>
               <tr>
                  <th class="nowrap">bidder</th>
                  <th class="nowrap"><span title="initial negotiable offer">🤑 i.n.o.</span></th>
                  <th class="nowrap">project</th>
                  <th class="nowrap">task description</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">125,00 €</td>
                  <td class="nowrap"><a href="https://onedevs.tech/taskpay">onedevs.tech/taskpay</a></td>
                  <td>task & pay: design task & pay logo</td>
               </tr>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">75,00 €</td>
                  <td class="nowrap"><a href="https://onedevs.tech/taskpay">onedevs.tech/taskpay</a></td>
                  <td>task & pay: make responsive, mobile, tables: align center</td>
               </tr>
               <tr>
                  <td>richi</td>
                  <td class="reward money nowrap align-right">35,00 €</td>
                  <td class="nowrap"><a href="https://onedevs.tech">onedevs.tech</a></td>
                  <td>home: vertical-align WhatsApp logo with phone number</td>
               </tr>
            </tbody>
         </table>

         <!-- PAYMENTS -->

         <table class="table payments" align="center">
            <thead>
               <tr>
                  <th colspan="8" class="title">pay</th>
               </tr>
               <tr>
                  <th>payer</th>
                  <th>receiver</th>
                  <th>project</th>
                  <th>banking note</th>
                  <th>payment</th>
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
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">MENU RESPONSIVE WWW.TATTOORUBIO.COM</td>
                  <td class="payment money nowrap align-right" title="Monday, 6 June 2022 19:51:36 pm Europe/Madrid">125,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">TRIBAL WWW.TATTOORUBIO.COM</td>
                  <td class="payment money nowrap align-right" title="Tuesday, 7 June 2022 11:05:21 am Europe/Madrid">70,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">WWW.TATTORUBIO.COM BANDERAS Y FAVICON</td>
                  <td class="payment money nowrap align-right" title="Tuesday, 7 June 2022 12:21:55 pm Europe/Madrid">50,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH DISEÑO LOGO Y ADAPTACION A SVG</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 8:18:10 am Europe/Madrid">230,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">sergio v.s.</td>
                  <td>Enterprise</td>
                  <td class="banking-concept">GESTIONES CREACION EMPRESA</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 10:02:12 am Europe/Madrid">100,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://www.tattoorubio.com" target="_blank">www.tattoorubio.com</a></td>
                  <td class="banking-concept">ONEDEVS.TECH TRIBAL MENOS SOBRECARGADO</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 17:14:05 pm Europe/Madrid">75,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH LOGO CON F MAYUSCULA</td>
                  <td class="payment money nowrap align-right" title="Wednesday, 8 June 2022 17:57:35 pm Europe/Madrid">25,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">ONEDEVS.TECH REMAQUETAR TASKPAY Y FAVICON</td>
                  <td class="payment money nowrap align-right" title="Friday, 10 June 2022 10:45:15 am Europe/Madrid">200,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">SONIDO MAS HOVER</td>
                  <td class="payment money nowrap align-right" title="Saturday, 11 June 2022 10:06:59 am Europe/Madrid">200,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">RESPONSIVE HOME ONEDEVS + SONIDO VIDEOS YOUTUBE</td>
                  <td class="payment money nowrap align-right" title="Saturday, 14 June 2022 8:41:42 am Europe/Madrid">530,00 €</td>
                  <td>👍</td>
               </tr>
               <tr>
                  <td class="nowrap">richi</td>
                  <td class="nowrap">jonathan</td>
                  <td><a href="https://onedevs.tech" target="_blank">onedevs.tech</a></td>
                  <td class="banking-concept">JAVASCRIPT SOUNDCLOUD</td>
                  <td class="payment money nowrap align-right" title="Tuesday, 14 June 2022 11:21:30 am Europe/Madrid">215,00 €</td>
                  <td>👍</td>
               </tr>
            </tbody>
         </table>

         <!-- AVAILABLE -->

         <?php

            $now_unixtime = \time();
            $now_date = \date('l d F Y', $now_unixtime);
            $now_time = \date('G:i:s a', $now_unixtime);
            $now_zone = \date('e', $now_unixtime);

         ?>

         <table class="table available" align="center">
            <thead>
               <tr>
                  <th colspan="4" class="title">
                     available now
                     <div class="datetime">
                        ...
                        <?= $now_date ?>
                        <?= $now_time ?>
                        <?= $now_zone ?>
                        ...
                     </div>
                  </th>
               </tr>
               <tr>
                  <th>country</th>
                  <th>bank</th>
                  <th>IBAN</th>
                  <th>🤑</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Spain</td>
                  <td>Cajasur Kutxabank</td>
                  <td>ES92 0237 6057 8091 7267 1245</td>
                  <td class="money">1.825,66 €</td>
               </tr>
            </tbody>
         </table>

         <!-- TOP -->

         <table class="table top" align="center">
            <thead>
               <tr>
                  <th colspan="3" class="title">top</th>
               </tr>
               <tr>
                  <th>#</th>
                  <th>who</th>
                  <th>🤑</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>jonathan</td>
                  <td class="money align-right">1.795,00 €</td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>sergio v.s.</td>
                  <td class="money align-right">100,00 €</td>
               </tr>
            </tbody>
         </table>

      </div>

   </body>

</html>

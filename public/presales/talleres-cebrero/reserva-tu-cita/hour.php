<?php

   \date_default_timezone_set('Europe/Madrid');

   $day = $_GET['day'];

   $year = \substr($day, 0, 4);
   $month = \substr($day, 4, 2);
   $day = \substr($day, 6, 2);

   $time = \mktime(0, 0, 0, $month, $day, $year);

   $weekdays = [
      'Domingo',
      'Lunes',
      'Martes',
      'Miércoles',
      'Jueves',
      'Viernes',
      'Sábado'
   ];

   $months = [
      'Enero',
      'Febrero',
      'Marzo',
      'Abril',
      'Mayo',
      'Junio',
      'Julio',
      'Agosto',
      'Septiembre',
      'Octubre',
      'Noviembre',
      'Diciembre'
   ];

   $weekday_fmt = $weekdays[\date('w', $time)];
   $day_fmt = \date('j', $time);
   $month_fmt = $months[\date('n', $time)-1];
   $year_fmt = \date('Y', $time);

   $date_fmt = $weekday_fmt . ' ' . $day_fmt . ' ' . $month_fmt . ' ' . $year_fmt;

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>

<!-- HOUR -->

<!DOCTYPE html>

<html lang="es">

   <head>
      
      <!-- TITLE -->

      <title>Talleres Cebrero - Cita</title>
      
      <!-- METAS -->

      <meta charset="utf-8">
      <meta name="author" content="OneDevs">
      <meta name="description" content="Talleres Cebrero - Reserva Tu Cita">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <meta property="og:title" content="Talleres Cebrero - Cita">
      <meta property="og:type" content="website">
      <meta property="og:description" content="Talleres Cebrero - Reserva Tu Cita">
      <meta property="og:url" content="https://onedevs.tech">
      <meta property="og:image" content="favicons/neumatico-negro-192x192.png">

      <!-- FAVICONS -->

      <link rel="icon" type="image/png" sizes="16x16"  href="favicons/neumatico-negro-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32"  href="favicons/neumatico-negro-32x32.png">
      <link rel="apple-touch-icon" sizes="57x57" href="favicons/neumatico-negro-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicons/neumatico-negro-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicons/neumatico-negro-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicons/neumatico-negro-76x76.png">
      <link rel="icon" type="image/png" sizes="96x96"  href="favicons/neumatico-negro-96x96.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicons/neumatico-negro-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicons/neumatico-negro-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicons/neumatico-negro-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicons/neumatico-negro-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicons/neumatico-negro-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicons/neumatico-negro-192x192.png">
      
      <!-- CSS -->

      <link rel="stylesheet" href="css/reserva-tu-cita.css?v=<?= $css_version ?>" />
            
   </head>

   <body>

      <table class="layout">
         <tbody>
            <tr>
               <td class="margin">
               </td>
            </tr>
            <tr>
               <td class="content">

                  <div>
                     <span class="talleres">TALLERES</span><br />
                     <span class="cebrero">CEBRERO</span>
                  </div>

                  <div style="height: 25px;"></div>

                  <div class="instructions">
                     Selecciona la hora en la que quieres llevar el vehículo al taller
                  </div>

                  <div style="height: 25px;"></div>

                  <div>
                     <table class="calendar" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <td colspan="2" class="month"><?= $date_fmt ?></td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="activeday">9:00</td>
                              <td class="activeday">9:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">10:00</td>
                              <td class="activeday">10:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">11:00</td>
                              <td class="activeday">11:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">12:00</td>
                              <td class="activeday">12:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">13:00</td>
                              <td class="activeday">13:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">16:00</td>
                              <td class="activeday">16:30</td>
                           </tr>
                           <tr>
                              <td class="activeday">17:00</td>
                              <td class="activeday">17:30</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

               </td>
            </tr>
            <tr>
               <td class="margin">
               </td>
            </tr>
         </tbody>
      </table>

   </body>

</html>

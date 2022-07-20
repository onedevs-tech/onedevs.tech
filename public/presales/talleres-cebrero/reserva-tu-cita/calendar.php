<?php

   \session_name('TallererCebrero');
   \session_start();

   $css_version = \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9) . \rand(0, 9);

?>

<!-- CALENDAR -->

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
                     En el calendario de abajo, selecciona el día en que quieres traernos el vehículo
                  </div>

                  <div style="height: 25px;"></div>

                  <div>
                     <table class="calendar" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <td colspan="7" class="month">Julio - Agosto 2022</td>
                           </tr>
                           <tr>
                              <td class="weekday">L</td>
                              <td class="weekday">M</td>
                              <td class="weekday">X</td>
                              <td class="weekday">J</td>
                              <td class="weekday">V</td>
                              <td class="weekenddayname">S</td>
                              <td class="weekenddayname">D</td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="pastday"></td>
                              <td class="pastday"></td>
                              <td class="pastday"></td>
                              <td class="pastday"></td>
                              <td class="pastday">1</td>
                              <td class="weekendday">2</td>
                              <td class="weekendday">3</td>
                           </tr>
                           <tr>
                              <td class="pastday">4</td>
                              <td class="pastday">5</td>
                              <td class="pastday">6</td>
                              <td class="pastday">7</td>
                              <td class="pastday">8</td>
                              <td class="weekendday">9</td>
                              <td class="weekendday">10</td>
                           </tr>
                           <tr>
                              <td class="pastday">11</td>
                              <td class="pastday">12</td>
                              <td class="pastday">13</td>
                              <td class="pastday">14</td>
                              <td class="pastday">15</td>
                              <td class="weekendday">16</td>
                              <td class="weekendday">17</td>
                           </tr>
                           <tr>
                              <td class="pastday">18</td>
                              <td class="pastday">19</td>
                              <td class="pastday">20</td>
                              <td class="pastday">21</td>
                              <td class="activeday"><a href="hour.php?day=20220722">22</a></td>
                              <td class="weekendday">23</td>
                              <td class="weekendday">24</td>
                           </tr>
                           <tr>
                              <td class="activeday"><a href="hour.php?day=20220725">25</a></td>
                              <td class="activeday"><a href="hour.php?day=20220726">26</a></td>
                              <td class="activeday"><a href="hour.php?day=20220727">27</a></td>
                              <td class="activeday"><a href="hour.php?day=20220728">28</a></td>
                              <td class="activeday"><a href="hour.php?day=20220729">29</a></td>
                              <td class="weekendday">30</td>
                              <td class="weekendday">31</td>
                           </tr>
                           <tr>
                              <td class="activeday"><a href="hour.php?day=20220801">1</a></td>
                              <td class="activeday"><a href="hour.php?day=20220802">2</a></td>
                              <td class="activeday"><a href="hour.php?day=20220803">3</a></td>
                              <td class="activeday"><a href="hour.php?day=20220804">4</a></td>
                              <td class="activeday"><a href="hour.php?day=20220805">5</a></td>
                              <td class="weekendday">6</td>
                              <td class="weekendday">7</td>
                           </tr>
                           <tr>
                              <td class="activeday"><a href="hour.php?day=20220808">8</a></td>
                              <td class="activeday"><a href="hour.php?day=20220809">9</a></td>
                              <td class="activeday"><a href="hour.php?day=20220810">10</a></td>
                              <td class="activeday"><a href="hour.php?day=20220811">11</a></td>
                              <td class="activeday"><a href="hour.php?day=20220812">12</a></td>
                              <td class="weekendday">13</td>
                              <td class="weekendday">14</td>
                           </tr>
                           <tr>
                              <td class="vacations">15</td>
                              <td class="vacations">16</td>
                              <td class="vacations">17</td>
                              <td class="vacations">18</td>
                              <td class="vacations">19</td>
                              <td class="weekendday">20</td>
                              <td class="weekendday">21</td>
                           </tr>
                           <tr>
                              <td class="activeday"><a href="hour.php?day=20220822">22</a></td>
                              <td class="activeday"><a href="hour.php?day=20220823">23</a></td>
                              <td class="activeday"><a href="hour.php?day=20220824">24</a></td>
                              <td class="activeday"><a href="hour.php?day=20220825">25</a></td>
                              <td class="activeday"><a href="hour.php?day=20220826">26</a></td>
                              <td class="weekendday">27</td>
                              <td class="weekendday">28</td>
                           </tr>
                           <tr>
                              <td class="activeday"><a href="hour.php?day=20220829">29</a></td>
                              <td class="activeday"><a href="hour.php?day=20220830">30</a></td>
                              <td class="activeday"><a href="hour.php?day=20220831">31</a></td>
                              <td class="activeday"></td>
                              <td class="activeday"></td>
                              <td class="weekendday"></td>
                              <td class="weekendday"></td>
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

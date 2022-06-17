<?php

   function onedevs_location()
   {
      $vertical_separator = vertical_separator(10, 9);

      $location = <<<HTML

      <!-- LOCATION -->

      <div class="home-section" id="location">

         <h2 class="title">dónde estamos</h2>

         <p class="content">
            Nuestra <b>Sede Central</b> está actualmente en un Piso Particular
            en Córdoba Capital, en la Dirección:<br />
            <br />
            <a class="link" target="_blank" href="https://www.google.es/maps/place/OneDevs+Digital+Services/@37.8796319,-4.7662912,17z/data=!3m1!4b1!4m5!3m4!1s0xd6d21585e1081a9:0xd2ab458934f9329f!8m2!3d37.8796277!4d-4.7641025?hl=es">
               Calle Conquistador Ordoño Álvarez, Número 6, Portal 1, Planta 1, Puerta 2,
               Código Postal 14010, Córdoba, España
            </a>
         </p>

         <p class="content image">
            <div class="mobile">
               <a class="link" target="_blank" href="https://www.google.es/maps/place/OneDevs+Digital+Services/@37.8796319,-4.7662912,17z/data=!3m1!4b1!4m5!3m4!1s0xd6d21585e1081a9:0xd2ab458934f9329f!8m2!3d37.8796277!4d-4.7641025?hl=es"><img class="image" src="/images/conquistador-ordono-alvarez-6-1.png" alt="OneDevs Location" width="450" /></a>
            </div>
            <div class="desktop">
               <a class="link" target="_blank" href="https://www.google.es/maps/place/OneDevs+Digital+Services/@37.8796319,-4.7662912,17z/data=!3m1!4b1!4m5!3m4!1s0xd6d21585e1081a9:0xd2ab458934f9329f!8m2!3d37.8796277!4d-4.7641025?hl=es"><img class="image" src="/images/conquistador-ordono-alvarez-6-1.png" alt="OneDevs Location" /></a>
            </div>
         </p>

      </div>
HTML;

      return $location;
   }

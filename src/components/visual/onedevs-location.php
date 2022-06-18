<?php

   function onedevs_location()
   {
      $vertical_separator = vertical_separator(10, 9);

      $location = <<<HTML

      <!-- LOCATION -->

      <div class="home-section" id="location">

         <h2 class="title">Dónde Estamos</h2>

         <p class="content">
            Nuestra <b>Sede Central</b> actual está en un Piso Particular
            en <a class="link" href="https://es.wikipedia.org/wiki/C%C3%B3rdoba_(Espa%C3%B1a)" target="_blank">Córdoba Capital</a>, en la Dirección:<br />
            <br />
            <a class="link" target="_blank" href="https://www.google.es/maps/place/OneDevs+Digital+Services/@37.8796319,-4.7662912,17z/data=!3m1!4b1!4m5!3m4!1s0xd6d21585e1081a9:0xd2ab458934f9329f!8m2!3d37.8796277!4d-4.7641025?hl=es">
               Calle Conquistador Ordoño Álvarez, Número 6, Portal 1, Planta 1, Puerta 2,
               Código Postal 14010, Córdoba, España
            </a>
         </p>

      </div>
HTML;

      return $location;
   }

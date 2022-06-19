<?php

   function onedevs_location()
   {
      $vertical_separator = vertical_separator(10, 9);

      $location = <<<HTML

      <!-- LOCATION -->

      <div class="home-section" id="location">

         <h2 class="title">__ Dónde Estamos __</h2>

         <div class="wrapper">
            <p class="content">
               Nuestra <b>Sede Principal</b> está actualmente en:<br />
               <br />
               <a class="link" href="https://es.wikipedia.org/wiki/C%C3%B3rdoba_(Espa%C3%B1a)" target="_blank">Córdoba Capital</a><br />
               <br />
            </p>
         </div>

      </div>

HTML;

      return $location;
   }

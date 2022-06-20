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
               <a class="link" href="https://www.google.com/maps/place/OneDevs+Digital+Services/@37.8796277,-4.7641025,15z/data=!4m5!3m4!1s0x0:0xd2ab458934f9329f!8m2!3d37.8796277!4d-4.7641025" target="_blank">Córdoba Ciudad</a><br />
               <br />
            </p>
         </div>

      </div>

HTML;

      return $location;
   }

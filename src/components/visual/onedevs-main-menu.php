<?php

   function onedevs_main_menu()
   {
      $html = <<<HTML

      <!-- MAIN MENU -->

      <div class="onedevs-main-menu">
         <div class="item"><a href="#quienes-somos">Quiénes Somos</a></div>
         <div class="item"><a href="#que-hacemos">Qué Hacemos</a></div>
         <div class="item"><a href="#de-que-controlamos">De Qué Controlamos</a></div>
         <div class="item"><a href="#portfolio">Confía En OneDevs</a></div>
         <div class="item"><a href="#location">Dónde Estamos</a></div>
         <div class="item"><a href="blog/">Blog OneDevs</a></div>
         <div class="item"><a href="#contactanos">Contáctanos</a></div>
      </div>
HTML;

      return $html;
   }

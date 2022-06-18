<?php

   function onedevs_main_menu()
   {
      $vertical_separator = vertical_separator(11);

      $html = <<<HTML

      <!-- MAIN MENU -->

      <div class="onedevs-main-menu">
         <div class="item"><span class="left-llave">{</span><a href="#quienes-somos">Quiénes Somos</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="#que-ofrecemos">Qué Servicios Ofrecemos</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="#stack-tecnologico">En Qué Somos Expertos</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="#portfolio">Confía En OneDevs</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="#location">Dónde Estamos</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="blog/">Blog OneDevs</a><span class="right-llave">}</span></div>
         {$vertical_separator}
         <div class="item"><span class="left-llave">{</span><a href="#contactanos">Contáctanos</a><span class="right-llave">}</span></div>
         {$vertical_separator}
      </div>
HTML;

      return $html;
   }

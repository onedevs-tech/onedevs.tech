<?php

   function onedevs_main_menu()
   {
      $html = <<<HTML

      <!-- MAIN MENU -->

      <div class="onedevs-main-menu">
         <div class="item"><span class="left-llave">{</span><a href="#quienes-somos">Quiénes Somos</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="#que-ofrecemos">Qué Ofrecemos</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="#stack-tecnologico">De Qué Controlamos</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="#portfolio">Confía En OneDevs</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="#location">Dónde Estamos</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="blog/">Blog OneDevs</a><span class="right-llave">}</span></div>
         <div class="item"><span class="left-llave">{</span><a href="#contactanos">Contáctanos</a><span class="right-llave">}</span></div>
      </div>
HTML;

      return $html;
   }

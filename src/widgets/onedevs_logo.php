<?php

   function onedevs_logo ()
   {
      $html = <<<HTML
<center>
   <img src="/images/logo-solo-circulo.svg" width="200" alt="Logo OneDevs" class="imglogo">
   <div class="nasalized" style="font-size: 0.9em;">__ OneDevs __</div>
   <div class="nasalized" style="font-size: 0.33em;">Developing The Future</div>
</center>
HTML;

      return $html;
   }

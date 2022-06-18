<?php

   function onedevs_web_brand()
   {
      $html = <<<HTML
<!-- BRAND -->

      <div class="onedevs-web-brand">
         <img class="logo" src="/images/logo-onedevs-blue.svg" width="200" alt="OneDevs">
         <span class="onedevs">__ OneDevs __</span>
         <span class="motto">Developing The Future</div>
      </div>
HTML;

      return $html;
   }

<?php

   function onedevs_web_brand()
   {
      $random_motto = onedevs_random_motto();

      $html = <<<HTML
<!-- BRAND -->

      <div class="onedevs-web-brand">
         <img class="logo" src="/images/logo-onedevs-blue.svg" width="200" alt="OneDevs">
         <span class="onedevs">__ OneDevs __</span>
         <span class="motto">{$random_motto}</div>
      </div>
HTML;

      return $html;
   }

<?php

   function onedevs_title()
   {
      $random_motto = onedevs_random_motto();

      $html = <<<HTML
<!-- TITLE -->

      <title>OneDevs - {$random_motto}</title>
HTML;

      return $html;
   }

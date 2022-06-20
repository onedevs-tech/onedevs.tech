<?php


   function onedevs_random_motto()
   {
      $mottos = [
         'Desarrollando El Futuro',
         'Developing The Future',
         'Freelance Developer Network',
         'Red de Desarrolladores Autónomos',
      ];

      return $mottos[\array_rand($mottos)];
   }

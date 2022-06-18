<?php

   function random_big_number($length = 99)
   {
      $random_big_number = '';
      for ($i=0; $i<$length; $i++) {
         $random_big_number .= \rand(0, 9);
      }
      return $random_big_number;
   }

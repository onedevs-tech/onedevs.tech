<?php

   function get_random_number($length = 77)
   {
      $random_number = '';
      for ($i=0; $i<$length; $i++) {
         $random_number .= \rand(0, 9);
      }
      return $random_number;
   }

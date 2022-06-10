<?php

   function random_numeric_token ($length = 22)
   {
      $token = '';
      for ($i=0; $i<$length; $i++) {
         $token .= \rand(0, 9);
      }
      return $token;
   }

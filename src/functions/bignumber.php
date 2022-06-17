<?php

   function bignumber($length = 99)
   {
      $bignumber = '';
      for ($i=0; $i<$length; $i++) {
         $bignumber .= \rand(0, 9);
      }
      return $bignumber;
   }

<?php

   function vertical_separator($pixels = 50, $spaces = 6)
   {

      $spaces = \str_repeat(' ', $spaces);

      $separator = <<<HTML


{$spaces}<!-- VERTICAL SEPARATOR --> <div style="height: {$pixels}px;"></div>
HTML;

      return $separator;
   }

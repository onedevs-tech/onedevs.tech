<?php

   function get_separator($pixels = 100, $spaces = 6)
   {
      $spaces = \str_repeat(' ', $spaces);
      $separator = <<<HTML

{$spaces}<!-- SEPARATOR --> <div style="margin-top: {$pixels}px;"></div>


HTML;

      return $separator;
   }
